<?php
//router
$pageParam = $_GET['page'] ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Admin Dashboard</title>
    <script src="assets_admin/js_admin/home.js"></script>;
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8a0a2d882c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
                include '../admin/page_admin/home.php';
                echo '<script src="../assets_admin/js_admin/home.js"></script>';
                break;
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
                include '../admin/page_admin/products.php';
                break;
            case 'orders':
                include '../admin/page_admin/orders.php';
                break;
            default:
                # code...
                break;
        }
        ?>
        <!-- Back to Top Button -->
        <!-- <a href="#" class="back-to-top" id="backToTop">
            <i class="fa fa-arrow-up"></i>
        </a> -->
    </div>
</body>