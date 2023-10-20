<?php 
include('dbconnect.php');
include('head.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!--main css-->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .myorder-table table {
            background: #fff none repeat scroll 0 0;
            border-color: #c1c1c1;
            border-radius: 0;
            border-style: solid;
            border-width: 1px 0 0 1px;
            width: 100%;
        }

        .myorder-table table th {
            font-weight: 600;
        }

        .myorder-table table th {
            border-bottom: 1px solid #c1c1c1;
            border-right: 1px solid #c1c1c1;
            color: #000;
            font-family: Bookman Old Style;
            font-size: 16px;
            font-weight: 600;
            padding: 15px 10px;
            text-align: center;
        }

        .myorder-table table td {
            border-bottom: 1px solid #c1c1c1;
            border-right: 1px solid #c1c1c1;
            color: #000;
            font-family: Cambria;
            font-size: 16px;
            font-weight: 600;
            padding: 15px 10px;
            text-align: center;
        }

        .myorder-table table .product-remove {
            padding: 0 15px;
            width: 20px;
        }

        .myorder-table table .product-remove>a,
        .table-content table .product-remove>a {
            font-size: 25px;
        }

        .myorder-table table .product-thumbnail {
            width: 150px;
        }

        .myorder-table table td.product-price .amount {
            font-weight: 700;
        }

        .myorder-table table .myorder-in-stock {
            color: #444;
        }

        .myorder-table table .product-add-to-cart>a {
            background: #252525 none repeat scroll 0 0;
            color: #fff;
            display: block;
            font-weight: 700;
            padding: 10px 56px;
            text-transform: uppercase;
            width: 260px;
        }

        .myorder-table table .product-add-to-cart>a:hover {
            background: #A87C3C;
            color: #fff;
        }

        .myorder-table table .product-add-to-cart {
            width: 240px;
        }

        .myorder-share {
            margin-bottom: 35px;
            margin-top: 20px;
        }

        .myorder-share ul li {
            display: inline-block;
            height: 21px;
            margin-left: 0;
            margin-right: 0;
        }

        .myorder-share ul li a {
            background-position: left top;
            border: medium none;
            display: inline-block;
            height: 21px;
            width: 21px;
        }

        .myorder-share ul li a:hover {
            background-position: left bottom;
        }

        .myorder-share .social-icon ul {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        
        
    </style>
</head>
<?php
if(($_SESSION['loggedin'])==true){
    
?>
<body>
    <?php
    $user_id=$_SESSION['id'];
    $get_user="Select * from `user` where user_id='$user_id'";
    $result=mysqli_query($conn,$get_user);
    if($result)
    {
        // echo "<script>alert('helllooo');</script>";
        while(
            
        $row_fetch=mysqli_fetch_array($result)){
        // $user_id=$row_fetch['user_id'];
        // echo "<script>alert(".$row_fetch['user_id'].");</script>";
        // echo $row_fetch['user_id'];
    }
    }
    else{
        echo mysqli_error($conn); }
    ?>
    <!-- <div class="container-fluid mb-5"
        style="background: rgba(0, 0, 0, 0) url(assets/img/dryfruitbg1.jpg) no-repeat scroll center center / cover;">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height:400px;">
             <h1 class="font-weight-semi-bold text-uppercase mb-2 text-white">Collections</h1> 
        </div>
    </div> -->
    <div class="container" id="table" style="padding: 20px 0;">
        <h1 class="text-center">My Orders</h1><br>
        <table class="table table-bordered mt-1">
            <thead class="bg-dark">
                <tr class="text-white text-center">
                    <th>Order Id</th>
                    <th>Date</th>
                    <!-- <th>Address</th> -->
                    <th>Amount Payable</th>
                    <!-- <th>Invoice Number</th> -->
                    <th>Order Status</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                <?php
                $sql = "SELECT *  FROM `booking_order` WHERE `user_id_fk` = 30;";
                $get_order_details="SELECT *  FROM `booking_order` WHERE `user_id_fk` = '$user_id';";
                $result_orders=mysqli_query($conn,$get_order_details);
                while($row_orders=mysqli_fetch_assoc($result_orders))
                {
                    $ord_id=$row_orders['booking_order_id'];
                    $ord_date=$row_orders['order_date'];
                    // $delivery_adr=$row_orders['delivery_adr'];
                    $payable_amt=$row_orders['order_amount'];
                    $ord_status=$row_orders['order_status'];
                    // $number=1;
                    echo "<tr>
                            <td>$ord_id</td>
                            <td>$ord_date</td>
                            <td>Rs. $payable_amt</td>
                            <td>$ord_status</td>
                            
                        </tr>";
                    // $num ber++;
                }
                
                ?>
                <!-- <td>$delivery_adr</td> -->
                            
            </tbody>
        </table>
    </div>
    
    <?php   } 
    else
    {
        echo "<script>alert('Login first to check your orders');
        window.location.href='login.php';</script>";
    }
    echo "<br><br><br><br><br><br>";
    include('foot.php');?>
</body>

</html>