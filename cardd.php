<?php
// include 'head.php';
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        hr {
            height: 5px;
            border-width: 0;
            background-color: #00A4BD;
        }

        .announcement-bar {
            width: 100%;
            background: #915531;
            color: #fff;
            font-size: calc(var(--typeBaseSize)*.75);
            position: relative;
            text-align: center;
            padding: 10px;
            border-bottom-color: #e8e8e1;
            
            border-bottom-color: var(--colorBorder);
        }
    </style>
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


</head>

<body>
   
        

    

    <?php //print_r($_SESSION['cart']);
    ?>
    <!-- <br> -->
    <!-- <br> -->
    <section style="background-color: #eee;">
    <div class="announcement-bar">
            <span class="announcement-text">Our Products</span>
        </div>

        <div class="container mt-5">
            <div class="row">

                <?php
                $sql = "SELECT * FROM `product` WHERE product_statius='yes';";
                //    $sql = "SELECT * FROM `product` where ;";
                $res = mysqli_query($conn, $sql);
                // $row=mysqli_fetch_assoc($res);
                //echo $row['product_name'];
                
                
                while ($row = mysqli_fetch_assoc($res)) {
                    // $product_id=$row['product_id'];
                    $product_name = $row['product_name'];
                    $product_desc = $row['description'];
                    $product_price = $row['price'];
                    $product_id = $row['product_id'];
                    $pimage = $row['image'];
                    //echo $product_name;
                    //echo "<br>";

                ?>


                    <div class="col-lg-3" style="width: 18rem;">
                        <form action="man_cart.php" method="POST">
                            <div class="row">
                                <div class=" col-md-12 mb-4">
                                    <div class="card">
                                        <div>
                                        <img src="Adminfinal/images/<?php echo $pimage;?>" class="card-img-top">
                                        </div>
                                        <div class="card-body text-center">
                                            <a href="product_details.php?item_id=<?php echo $product_id ;?>" style="text-decoration: none;">
                                                <h5 class="card-title"><?php echo $product_name; ?></h5>
                                            </a>
                                            <!-- <p class="card-text"><?php #echo $product_desc; ?></p> -->
                                            <p class="card-text">Price : <?php echo $product_price; ?>/-</p>
                                            <button type="submit" name="atc" class="btn btn-info">Add to cart</button>
                                            <input type="hidden" name="item_name" value="<?php echo $product_name; ?>">
                                            <input type="hidden" name="item_price" value="<?php echo $product_price; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>

                        </form>
                        <!-- &nbsp; -->
                    </div>

                <?php } ?>
            </div>
        </div>
    </section>

    <div class="container mt-5"></div>
</body>

</html>
<?php #include 'foot.php'; 
?>