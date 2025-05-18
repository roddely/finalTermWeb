<?php
require_once __DIR__ . '/../service/AdminProductService.php';

class AdminProductController
{
    private $productService;

    public function __construct($productService)
    {
        $this->productService = $productService;
    }

    public function showAllProducts($page = 1)
    {
        $perPage = 10;
        $products = $this->productService->getAllProducts($page, $perPage);
        $totalProducts = $this->productService->getTotalProducts();
        return [
            'products' => $products,
            'totalProducts' => $totalProducts,
            'perPage' => $perPage,
            'currentPage' => $page
        ];
    }

    public function deactivateProduct($productId)
    {
        return $this->productService->deactivateProduct($productId);
    }
}

// - `$page`: Số trang hiện tại, mặc định là 1.
// - `$perPage`: Số sản phẩm mỗi trang (10).
// - Trả về một mảng chứa:
// - `products`: Danh sách sản phẩm cho trang hiện tại.
// - `totalProducts`: Tổng số sản phẩm.
// - `perPage`: Số sản phẩm mỗi trang.
// - `currentPage`: Số trang hiện tại (dùng cho giao diện phân trang).