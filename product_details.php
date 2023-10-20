<?php
include 'head.php'; 
include 'dbconnect.php';
?>
<html>

<head>
    <title>Product Details page Design</title>

<body>
    <link href="style_p.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <div class="p_back">
        <?php
        $id=$_REQUEST['item_id'];
        $sql = "SELECT * FROM `product` WHERE product_id='$id';";
        //    $sql = "SELECT * FROM `product` where ;";
            $res=mysqli_query($conn,$sql);
            // $row=mysqli_fetch_assoc($res);
            //echo $row['product_name'];
            while($row=mysqli_fetch_assoc($res))
            {
                $product_name=$row['product_name'];
                $product_desc=$row['description'];
                $product_price=$row['price'];
                $product_id=$row['product_id'];
                $pimage=$row['image'];
            }
        ?>
        <div class="row mx-3">
            <div class="col-md-5">
                <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> -->
                    <!-- <div class="carousel-inner"> -->
                        <!-- <div class="carousel-item active"> -->
                            <img class="d-block w-100" src="Adminfinal/images/<?php echo $pimage;?>" alt="First slide">
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
            </div>
            <br>
            <div class="col-md-7">
                <p class="newarrival text-center">NEW</p>
                <h2><?php echo $product_name;?></h2>
                <p>Product description : <?php echo $product_desc ;?></p>
                <img src="star.jpeg" class="stars">
                <p class="price">₹<?php echo $product_price;?></p>
                <p><b>Availability: </b> In Stock</p>
                <p><b>Condition: </b> New</p>
                <p><b>Brand: </b> XYZ Company</p>
                <label>Quantity:</label>
                <input type="text" value="1">
                <form action="man_cart.php" method="POST"><br>
                <button type="submit" name="ac" class="btn btn-info">Add to cart</button>
                </form>
            </div>
        </div>

    </div>
</body>
</head>

</html>
<br><br><br>
<?php include 'foot.php'; ?>