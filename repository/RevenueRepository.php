<?php
require_once __DIR__ . '/../models/Revenue.php';

class RevenueRepository
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getRevenueData()
    {
        $query = "SELECT DATE(order_date) AS orderDate, SUM(total_amount) AS totalRevenue
                  FROM orders
                  GROUP BY DATE(order_date)
                  ORDER BY order_date ASC";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        $revenues = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $revenues[] = new Revenue($row['orderDate'], $row['totalRevenue']);
        }

        return $revenues;
    }
}
?>