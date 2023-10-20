
<?php 
include 'dbconnect.php';
include 'head.php';
?>
<html>
<head>
    
<title>product card</title>
</head>
<body>
<section style="background: url(background.png) no-repeat; background-size:cover;">

<div class="container mt-10"></div>
<br>
<div class="container"> 
        <div class="row">
            <h2>Featured Products</h2>
        </div>

<div class="container mt-5">
<div class="row mx-8" >
    
    <?php 
    $cat_name=$_REQUEST['name'];
    // echo $cat_name;
    $q = "SELECT *  FROM `category` WHERE `category_name`='$cat_name';";
    $r=mysqli_query($conn,$q);
    
    while($r1=mysqli_fetch_assoc($r)){
         $cat_id=$r1['category_id']."<br>";
    

    $sql = "SELECT * FROM `product` WHERE c_id_fk='$cat_id';";
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

<?php } } ?>
    </div>
</div>
</div>

</section>
</body>
</html>

<?php include 'foot.php'; ?>