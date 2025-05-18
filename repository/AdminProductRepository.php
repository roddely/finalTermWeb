<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Product.php';

class AdminProductRepository
{
    private $connnection;

    public function __construct($db)
    {
        $this->connnection = $db->getConnection();
    }

    public function getAllProducts($page = 1, $perPage = 10)
    {
        try {
            $offset = ($page - 1) * $perPage;
            $query = "SELECT * FROM products WHERE isActive = TRUE LIMIT :perPage OFFSET :offset";
            $statement = $this->connnection->prepare($query);
            $statement->bindValue(':perPage', $perPage, PDO::PARAM_INT);
            $statement->bindValue(':offset', $offset, PDO::PARAM_INT);
            $statement->execute();

            $products = [];
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $products[] = new Product(
                    $row['productID'],
                    $row['productName'],
                    $row['title'],
                    $row['description'],
                    $row['price'],
                    $row['stockQuantity'],
                    $row['image'],
                    $row['categoryID']
                );
            }
            return $products;
        } catch (PDOException $e) {
            error_log("Lỗi khi lấy sản phẩm: " . $e->getMessage());
            return [];
        }
    }

    public function getTotalProducts()
    {
        try {
            $query = "SELECT COUNT(*) as total FROM products WHERE isActive = TRUE";
            $statement = $this->connnection->prepare($query);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return (int)$result['total'];
        } catch (PDOException $e) {
            error_log("Lỗi khi đếm sản phẩm: " . $e->getMessage());
            return 0;
        }
    }

    public function deactivateProduct($productId)
    {
        try {
            $query = "UPDATE products SET isActive = FALSE WHERE productID = :productId";
            $statement = $this->connnection->prepare($query);
            $statement->bindValue(':productId', $productId, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $e) {
            error_log("Lỗi khi vô hiệu hóa sản phẩm: " . $e->getMessage());
            return false;
        }
    }
}