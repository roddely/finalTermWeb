<?php

class Revenue
{
    public $orderDate;
    public $totalRevenue;

    public function __construct($orderDate, $totalRevenue)
    {
        $this->orderDate = $orderDate;
        $this->totalRevenue = $totalRevenue;
    }
}
?>