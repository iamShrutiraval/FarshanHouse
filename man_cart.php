<?php
include 'dbconnect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo $qty=$_POST['qty'];
    if (isset($_POST['ac'])) {
        $qty = $_POST['qty'];
        // echo "hello";
        if (isset($_POST['ac'])) {
            if (isset($_SESSION['id'])) {
                
                if($_SESSION['loggedin'] == "true"){

                $sql = "INSERT INTO `cart` (`user_id_fk`, `product_id_fk`, `quantity`) VALUES 
('$_SESSION[id]', '$_SESSION[pid]', '$qty')";
                $res = mysqli_query($conn, $sql);
                if ($res) {
                    echo "<script>alert('Item added to cart succesfully');
                    window.location.href='cart.php';</script>";

                }
            }else{
                // echo "ggfghf";
            }
        }
    }
        if (isset($_SESSION['prd'])) {

            $nitem = array_column($_SESSION['prd'], 'item_name');

            if (in_array($_POST['item_name'], $nitem)) {
                // echo"<script>
                // alert('item already added');
                // window.location.href='cart.php';
                // </script>";
            } else {

                $count = count($_SESSION['prd']);
                $_SESSION['prd'][$count] = array('item_name' => $_POST['item_name'], 'price' => $_POST['item_price'], 'quantity' => 1);
                echo "<script>
            
            window.location.href='cart.php';
            </script>";
            // alert('Item added to cart successfully');
            }
        } else {
            $_SESSION['prd'][0] = array('item_name' => $_POST['item_name'], 'price' => $_POST['item_price'], 'quantity' => 1);
            echo "<script>
            window.location.href='cart.php';
            </script>";
        }
    }

    if (isset($_POST['remove_item'])) {
        $pid = $_POST['pid'];
        if (isset($_SESSION['id'])) {

            $sql = "DELETE FROM `cart` WHERE `product_id_fk` = '$pid'";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                echo "
                <script>
                alert('Item deleted');
                
                window.location.href='cart.php';
                </script>
                ";   
            }
        }
        foreach ($_SESSION['prd'] as $key => $value) {
            if ($value['item_name'] == $_POST['item_name']) {
                unset($_SESSION['prd'][$key]);         //unset to remove product that is having same name from button 
                $_SESSION['prd'] = array_values($_SESSION['prd']);      //array_values to rearrange the product key in cart
                echo "
                alert('Item deleted');
                <script>
                window.location.href='cart.php';
                </script>
                ";
            }
        }
    }
}

// }
// else{
//     echo 'hello';
// }
