<?php
session_start();
include 'dbconnect.php';

$sql = "select *from category where category_status='Enable'";
$res = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>JSH Farshan House</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets\img\JSHlogo.png" rel="icon">
    <link href="assets\img\JSHlogo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <style>
        .navbar1 {
            position: relative;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            align-items: center;
            width: 100%;
        }

        #navbar,
        #header {
            position: relative;
        }

        .bar {
            align-items: right;
        }

        .btn {
            font-style: bold;
            font-family: Arial, Helvetica, sans-serif;
            /* height: 30px; */
        }

        .serch {
            width: 100%;
            border-radius: 50px;
            /* height: 30px; */
        }

        .a-text {
            text-decoration: none;
        }

        .announcement-bar {
            width :100%;
            background: #915531;
            color:coral;
            font-size: calc(var(--typeBaseSize)*.75);
            position: relative;
            text-align: center;
            padding: 10px;
            border-bottom-color: #e8e8e1;
            border-bottom-color: var(--colorBorder);
        }
    </style>
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <!-- <div class="announcement-bar">
            <span class="announcement-text">Welcome to Farshan House!!</span>
        </div> -->
    <header id="header" class="fixed-top d-flex align-items-center bg-dark fixed-top">
        
        <div class="container d-flex justify-content-between align-items-center">

            <div id="logo">
                <a href="index.php"><img src="assets\img\JSHlogofinal.png" alt="" style="max-height: 80px;"></a>

            </div>

            <nav id="navbar" class="navbar bg-opacity-10 navbar1">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="aboutus.php">About US</a></li>
                    <!-- <li><a class="nav-link scrollto " href="#portfolio">Sweet thooth</a></li> -->
                    <li class="dropdown" name="cat" id="cat"><a href="#" class="a-text"><span>Category</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($res)) {
                            ?>
                                <li><a href="product_card.php?name=<?php echo $row['category_name'] ?>" class="a-text"><?php echo $row['category_name'] ?></a></li>
                               
                            <?php
                                // echo "<button name='updatecat' class='btn btn-primary'>EDIT</button>";
                                $i++;
                            }
                            ?>
                        </ul>
                    </li>
                    <!-- <li><a class="nav-link scrollto" href="">Best selling</a></li> -->
                </ul>
                <div class="bar">
                    <ul>
                        <li>
                            <div class="container-fluid">
                                <form class="d-flex" role="search" action="se.php" method="POST">
                                    <input class="form-control me-2 serch" type="search" placeholder="Search" aria-label="Search" name="sea" id="sea">
                                    <button class="btn-light bi bi-search btn" type="submit" name="search" id="search"></button>
                                </form>
                            </div>
                        </li>
                        <li>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                <a class="bi bi-bag btn btn-outline-warning" href="cart.php"> Cart<?php // echo count($_SESSION['cart']); 
                                                                                                    ?></a>
                                <?php
                                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE) {
                                    if ($_SESSION['Rolec'] == 'Customer') {
                                        echo ' <ul class="nav navbar-top-links navbar-right">

                                        <!-- /.dropdown -->
                                        <li class="dropdown">
                                            <a style="text-decoration: none" class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                <i class="bi bi-person ">&nbsp;';
                                                if(isset($_SESSION['id'])){
                                                    echo $_SESSION['name'];
                                                }
                                                echo '</i> 
                                            </a>
                                            <ul class="dropdown-menu dropdown-user">
                                                <li>
                                                <a style="text-decoration: none" href="manage_profile.php">
                                                 User Profile</a>
                                                </li>
                                                <li>
                                                <a style="text-decoration: none" href="user_order.php">
                                                My Orders</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a style="text-decoration: none" href="logout.php"> Logout</a>
                                                </li>
                                            </ul>
                                            <!-- /.dropdown-user -->
                                        </li>
                                        <!-- /.dropdown -->
                                        </ul>';
                                        // echo '    <a class="btn me-md-2 bi bi-person btn-outline-warning" style="height: 40px;" href="manage_profile.php">&nbsp;Manage Profile</a>';

                                        // echo '    <a class="btn me-md-2 bi bi-person btn-outline-warning" style="height: 40px;" href="logout.php">&nbsp;Log out</a>';
                                        // echo '    <a class="btn me-md-2 bi bi-person btn-outline-warning" style="height: 40px;" href="#">Manage Profile</a>';
                                    }
                                } else {
                                    echo ' <a class="btn me-md-2 bi bi-person btn-outline-warning" style="height: 40px;" href="login.php"> &nbsp;Log in</a>';
                                }

                                ?>


                                <!-- <a class="bi bi-bag btn btn-outline-warning" href="cart1.php">&nbsp; Cart</a> -->
                            </div>

                        </li>

                    </ul>
                </div>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
</body>

</html>