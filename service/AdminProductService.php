<?php
require_once __DIR__ . '/../repository/AdminProductRepository.php';

class AdminProductService
{
    private $productRepository;

    public function __construct(AdminProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProducts($page, $perPage)
    {
        return $this->productRepository->getAllProducts($page, $perPage);
    }

    public function getTotalProducts()
    {
        return $this->productRepository->getTotalProducts();
    }

    public function deactivateProduct($productId)
    {
        return $this->productRepository->deactivateProduct($productId);
    }
}

// - Thêm phương thức `getAllProducts($page, $perPage)` để truyền tham số phân trang đến repository.
// - Thêm phương thức `getTotalProducts()` để lấy tổng số sản phẩm.