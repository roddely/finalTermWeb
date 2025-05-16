<?php

require_once __DIR__ . '/../repository/RevenueRepository.php';
require_once __DIR__ . '/../models/Revenue.php';

class RevenueService
{
    private RevenueRepository $revenueRepository;

    public function __construct($revenueRepository)
    {
        $this->revenueRepository = $revenueRepository;
    }

    public function getRevenueData()
    {
        return $this->revenueRepository->getRevenueData();
    }
}
?>