<?php
require_once __DIR__ . '/../service/RevenueService.php';

class DashboardController
{
    private RevenueService $revenueService;

    public function __construct($revenueService)
    {
        $this->revenueService = $revenueService;
    }

    public function showDashboard()
    {
        $revenues = $this->revenueService->getRevenueData();
        if ($revenues) {
            echo json_encode(["success" => true, "revenues" => $revenues]);
            exit();
        } else {
            echo json_encode(["success" => false, "message" => "Không tìm thấy dữ liệu doanh thu"]);
            exit();
        }
    }
}
