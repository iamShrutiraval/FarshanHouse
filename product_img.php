<?php
include 'head.php'; ?>
<html>

<head>
    <title>Product Details page Design</title>
    <script>
        function myfunction() {
           var cqty=document.getElementById("qty").value;
            var price=document.getElementById("cprice").value;
            var qtotal=cqty*price;
            document.getElementById("nprice").innerHTML ="Rs."+ qtotal + ".00";            
        }
    </script>
</head>
<body>
    <section style="background: url(background.png) no-repeat; background-size:cover;">
        <link href="style_p.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
        <div class="p_back">
            <?php
            // if(isset($_POST['prd']) || isset($_POST['prd']))
            // {
            $id = $_REQUEST['item_id'];
            $sql = "SELECT * FROM `product` WHERE product_id='$id';";
            //    $sql = "SELECT * FROM `product` where ;";
            $res = mysqli_query($conn, $sql);
            // $row=mysqli_fetch_assoc($res);
            //echo $row['product_name'];
            while ($row = mysqli_fetch_assoc($res)) {
                $product_name = $row['product_name'];
                $product_desc = $row['description'];
                $product_qty = $row['weight'];
                $product_price = $row['price'];
                $product_id = $row['product_id'];
                $product_img = $row['image'];
                $_SESSION['pid'] = $product_id;
            }
            ?>

            <?php
            //print_r($_SESSION['prd']); 
            ?>

            <div class="row mx-3">
                <div class="col-md-5">
                    <img class="d-block w-100" height="400px" width="100px" src="Adminfinal/images/<?php echo $product_img; ?>">
                </div>
                <?php
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $value) {
                        //   $stotal = $stotal + $value['price'];
                    }
                }
                ?>
                <div class="col-md-7">
                    <!-- <p class="newarrival text-center">NEW</p> -->
                    <h2><?php echo $product_name; ?></h2>
                    <input type="hidden" name="item_name" value="<?php echo $product_name; ?>">
                    <p>
                    <h5>Product description : </h5>
                    <h6><?php echo $product_desc; ?></h6>
                    </p>
                    <h5>Weight:&nbsp;<u><?php echo $product_qty; ?>gm</u></h5>
                    <h5 id="nprice">Rs.<?php echo $product_price; ?></h5>
                    <input type="hidden" name="cprice" id="cprice" value="<?php echo $product_price;?>">
                    <label><b>Quantity:</b></label>
                    <form action="man_cart.php" method="POST">
                       
                        <select name="qty" id="qty" onchange="myfunction()" required>

                            <?php

                            $rowcount = 10;
                            for ($i = 1; $i <= $rowcount; $i++) {
                            ?>
                                <!-- It's display a option for dropdown and take a value-->
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>

                            <?php
                            }
                            ?>

                        </select>
                        <!-- </form> -->
                        <!-- <button onclick="decrement()">-</button> -->
                        <!-- <input id="demoInput" type="number" min="1" max="10" value="1" width="80px"> -->
                        <!-- <input type="text" id="demoInput"> -->
                        <!-- <button onclick="increment()">+</button>
                <script>
                    function increment() {
                        document.getElementById('demoInput').stepUp();
                    }

                    function decrement() {
                        document.getElementById('demoInput').stepDown();
                    } 
                </script> -->

                        <!-- <form action="man_cart.php" method="POST"> -->
                        <br>
                        <br>
                        <button type="submit" name="ac" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="item_name" value="<?php echo $product_name; ?>">
                        <input type="hidden" name="item_price" value="<?php echo $product_price; ?>">


                    </form>
                </div>
            </div>
        </div>
        <?php #}
        ?>
        </div>


</body>
</head>
</section>

</html>
<br><br><br>
<?php include 'foot.php'; ?>