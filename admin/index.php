<?php
// index.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../config/Database.php';

// Nếu không phải yêu cầu API, tiếp tục xử lý trang HTML
$pageParam = $_GET['page'] ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/8a0a2d882c.js" crossorigin="anonymous"></script>
    <link href="../admin/assets_admin/css_admin/home_css.css" rel="stylesheet">
</head>
<body>
    <?php
    include '../admin/layout/sidebar.php';
    ?>
    <div class="container <?php echo $marginClass; ?>">
        <?php
        switch ($pageParam) {
            case '':
            case 'home':
                include '../admin/page_admin/home.php';
                echo '<script src="../assets_admin/js_admin/home.js"></script>';
                break;
            case 'dashboard':
                $homeController->showDashboard();
                break;
            case 'customers':
                include '../admin/page_admin/customers.php';
                break;
            case 'products':
                require_once __DIR__ . '/../controllers/AdminProductController.php';
                require_once __DIR__ . '/../service/AdminProductService.php';
                require_once __DIR__ . '/../repository/AdminProductRepository.php';

                // Lấy số trang từ URL, mặc định là 1
                $page = isset($_GET['p']) && is_numeric($_GET['p']) && $_GET['p'] > 0 ? (int)$_GET['p'] : 1;

                // Khởi tạo class Database và lấy kết nối
                $database = new Database();
                $productRepository = new AdminProductRepository($database);
                $productService = new AdminProductService($productRepository);
                $productController = new AdminProductController($productService);

                // Lấy dữ liệu sản phẩm và thông tin phân trang
                $data = $productController->showAllProducts($page);
                if (!$data || !isset($data['products'])) {
                    throw new Exception('Failed to load products');
                }
                $products = $data['products'];
                $totalProducts = $data['totalProducts'];
                $perPage = $data['perPage'];
                $currentPage = $data['currentPage'];

                include __DIR__ . '/../admin/page_admin/products.php';
                break;
            case 'orders':
                include '../admin/page_admin/orders.php';
                break;
            default:
                include '../admin/page_admin/home.php';
                echo '<script src="../assets_admin/js_admin/home.js"></script>';
                break;
        }
        ?>
    </div>
</body>
</html>