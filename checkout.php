<?php  include 'head.php'?>
<!DOCTYPE html>
<html lang="en">
<?php

if(isset($_POST['checkout']))
{
    if(isset($_SESSION['id']))
    {    
    $user_id=$_SESSION['id']; 
            include 'dbconnect.php';
            $get_user = "SELECT *  FROM `user` WHERE `user_id` = '$user_id';";
        

            $run_pro = mysqli_query($conn,$get_user);

            $i = 0;

            while ($row_pro = mysqli_fetch_assoc($run_pro))
             {
               $fname = $row_pro['firstname'];
                $lname = $row_pro['lastname'];
                $email = $row_pro['email_id'];
                // $contact = $row_pro['mobile'];
                $i++;  
              
       ?>
       <?php }   ?>
<head>
    <meta charset="utf-8">
    <title>Payment</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/demo.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>

    
    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" value="<?php echo $fname; ?>"type="text" disabled >
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" value="<?php echo $lname; ?>"  disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" value="<?php echo $email; ?>"  disabled>
                        </div>
                        <!-- <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" value="<?php echo $contact; ?>"  disabled>
                        </div> -->
                        <div></div>
                        <br>
                        <hr>
                        <form action="handleorder.php" method="POST">
                        <div class="col-md-6 form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" name="address" max="200" value="" required>
                            <label>City</label>
                            <input class="form-control" type="text" value="Ahmedabad" disabled>
                            <label>Pincode</label>
                            <input class="form-control" type="text" max="6" name="pincode" value=""  pattern="[0-9]{6}" required>



                        </div>
                        <!-- </form> -->
                    </div>
                </div>
              <h3> <center>We Accept Cash on Delivery Only.</center></h3>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5 round-0">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        <?php 
                            $subtotal=0;
                            $user_id = $_SESSION['id'];
                            $select="select * from cart where user_id_fk= $user_id";
                            if($res=mysqli_query($conn,$select)){
                                if(mysqli_num_rows($res) > 0 ){
                                    $total=0;
                                    while($cart_row=mysqli_fetch_assoc($res)){
                                        $proid=$cart_row['product_id_fk'];
                                        $pkt=$cart_row['quantity'];
                                      if($res1=mysqli_query($conn,"select * from product where product_id=$proid")) {

                                        $product_row=mysqli_fetch_assoc($res1);
                                        $Product_name = $product_row['product_name'];
                                        $Product_price = $product_row['price'];
                                        $total+=$Product_price;
                                      
                                        
                                        ?>
                                <div class="d-flex justify-content-between">
                                    <p><b><?= $Product_name ?></b> ( <?php echo $pkt."pkt";?> )
                                             ( <?php echo $Product_price; ?>)</p>
                                    <p><?php
                                    $ctotal=$Product_price*$pkt;
                                    echo $ctotal;
                                    $subtotal+=$ctotal;
                                    ?>/-</p>
                                </div>
                                        <?php 
                                    }
                                }
                            }
                                else{
                                    // SHOW EMPTY CART MESSAGE HERE !!
                                }
                            }
                        
                        
                        
                        ?>
                        <hr class="mt-0">
                        
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">Rs. <?php echo $subtotal; ?>/-</h5>
                        </div>
                    </div>
             </div>
            
                    <!-- <form method="post" action="handleorder.php"> -->
                        <input type="hidden" name="user_id" value="<?= $user_id ?>">
                        <input type="hidden" name="total_amt" value="<?= $subtotal ?>">
                    <div class="card-footer border-secondary bg-transparent">
                        <button type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" name="placeorder">Place Order</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        
</body>
</html>

<?php  }  else{
                // echo"<script>
                // window.location.href='login.php';
                // </script>";
            } 
}  include 'foot.php';?>
