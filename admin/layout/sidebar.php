<?php
// Xử lý logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_start();
    session_destroy(); // Hủy toàn bộ session
    header('Location: ../public/index.php'); // Chuyển hướng đến trang public/index.php
    exit();
}
?>
<div class="sidebar bg-white border-end">
    <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
        <h5 class="mb-0">ShopAdmin</h5>
        <button class="btn btn-sm btn-light"><i class="bi bi-chevron-left"></i></button>
    </div>
    <div class="p-3">
        <div class="nav flex-column">
            <a href="?page=home" class="nav-link"><i class="bi bi-grid me-2"></i> Dashboard</a>
            <a href="?page=products" class="nav-link"><i class="bi bi-bag me-2"></i> Products</a>
            <a href="?page=orders" class="nav-link"><i class="bi bi-box me-2"></i> Orders</a>
            <a href="?page=customers" class="nav-link"><i class="bi bi-people me-2"></i> Customers</a>
            <a href="#" class="nav-link"><i class="bi bi-bar-chart me-2"></i> Analytics</a>
            <a href="#" class="nav-link"><i class="bi bi-credit-card me-2"></i> Transactions</a>
            <a href="#" class="nav-link"><i class="bi bi-chat me-2"></i> Messages</a>
            <a href="#" class="nav-link"><i class="bi bi-bell me-2"></i> Notifications</a>
            <a href="#" class="nav-link"><i class="bi bi-gear me-2"></i> Settings</a>
        </div>
    </div>
    <div class="mt-auto p-3 border-top">
        <a href="?action=logout" class="nav-link text-danger"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
    </div>
</div>