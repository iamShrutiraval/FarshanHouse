<?php
session_start();
include 'dbConnect.php';
if(isset($_POST['placeorder'])){
    $mast_user_id=$_POST['user_id'];
    $mast_total=$_POST['total_amt'];
    $address=$_REQUEST['address'];
    $pincode=$_REQUEST['pincode'];

    $add="INSERT INTO `user_address` (`user_id_fk`, `address`, `city`, `pincode`, `is_default`) 
    VALUES ('$mast_user_id', '$address', 'Ahmedabad', '$pincode', 'yes');";
    $add_row=mysqli_query($conn,$add);
    

    $address_id = "SELECT *  FROM `user_address` WHERE `user_id_fk` = $mast_user_id;";
    $address_row=mysqli_query($conn,$address_id);    
    while($res=mysqli_fetch_assoc($address_row)){
        echo $user_add=$res['user_address_id'];
    }
    $ord_mast_ins_qry = "INSERT INTO `booking_order` (`user_id_fk`, `address_id`, `order_amount`)
     VALUES ($mast_user_id,$user_add,$mast_total);";
     $in_book=mysqli_query($conn,$ord_mast_ins_qry);
     echo $in_book;
    
            $flag=0;
            //                 //DELETE SECTION FOR CART !
                            $sel_qry="select * from cart where user_id_fk=$mast_user_id";
                            if($sel_qry_res=mysqli_query($conn,$sel_qry)){
                                if(mysqli_num_rows($sel_qry_res) > 0 ){
                                    while($sel_qry_row=mysqli_fetch_assoc($sel_qry_res)){
                                        $cart_id=$sel_qry_row['cart_id'];
                                        $del_qry="delete from cart where cart_id=$cart_id";

                                        if($del_qry_res=mysqli_query($conn,$del_qry)){
                                            // NOTHING
                                        }
                                        else{
                                            $flag=1;   
                                        }
                                    }
                                }
                                else{
                                    $flag=1;
                                    // ERROR MESSAGE 
                                }

                            }
                            else{
                                $flag=1;
                                // ERROR MESSAGE 
                            }

                         
                    }
                    else{
                        $flag=1;
                        // ERROR MESSAGE 
                    }
                    
                    // }
            //         else{
            //             $flag=1;
            //             // ERROR MESSAGE 
            //         }
            //     }
            //     else{
            //         $flag=1;
            //         // ERROR MESSAGE 
            //     }
            // }
            // else{
            //     $flag=1;
            //     // ERROR MESSAGE 
            // }
            if($flag==0){
                echo "<script>alert('Your Order has been placed');</script>";
                header("Location:/project/pf/project/user_order.php?Place_order=True");
                exit();
            }
            else{
                header("Location:/project/pf/project/user_order.php?Place_order=Failure");
                exit();
            }
    
        

// }
?>