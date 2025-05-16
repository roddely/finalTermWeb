<?php
require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../../controllers/DashboardController.php';

header('Content-Type: application/json');

$database = new Database();
$revenueService = new RevenueService(new RevenueRepository($database));
$dashboardController = new DashboardController($revenueService);

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $dashboardController->showDashboard();
}
