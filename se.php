<?php 
include 'head.php';
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section style="background: url(background.png) no-repeat; background-size:cover;">
    <?php 
    if(isset($_POST['search'])){
    ?>
    <?php $searchvariable=$_POST['sea'];
    ?>
    <div class="container mt-5">
    <div class="row mx-8" >
<?php 
     $sql = "SELECT * FROM `product` WHERE product_name like '%$searchvariable%';";
         $res=mysqli_query($conn,$sql);
         while($row=mysqli_fetch_assoc($res))
         {
            
            $product_name=$row['product_name'];
            $product_desc=$row['description'];
             $product_price=$row['price'];
            $product_id=$row['product_id'];
            $product_img=$row['image'];
    
    ?>
             <div class="col-md-4 mb-4" style="width: 18rem;">
        <form action="man_cart.php" method="POST">
            <div class="card" >
            <a href="product_img.php?item_id=<?php echo $product_id; ?>" name="prd" id="prd" style="text-decoration: none;">
                <img src="Adminfinal/images/<?php echo $product_img; ?>" class="card-img-top" style="height:35vh; width35vh;">
                <div class="card-body text-center">
                    
                    
                    
                    <h5 name="prd" id="prd" class="card-title" style="color:black"><?php echo $product_name; ?></h5>
                
                    <!-- <p class="card-text" style="color: black;">Price : <?php echo $product_price;?>/-</p> -->
    
    <br>
                    <input type="hidden" name="item_name" value="<?php echo $product_name; ?>">
                    <input type="hidden" name="item_price" value="<?php echo $product_price; ?>">
                </div>
                </a> 
            </div>
        </form>
        </div>
            <?php
        }
    
    }
    ?>
    </div>
    </div>
    <div class="container mt-5"></div>

</body>
</section>
</html>

<?php
// echo "<br><br><br><br><br><br><br><br><br><br><br>";
include 'foot.php';
?>