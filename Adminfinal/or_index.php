<?php 
// if ((!isset($_SESSION['Role']))) {
//    // header('Location:../login.php');
//    echo "<script>alert('you are not admin');</script>";
// } else {

include 'head.php';
include 'dbconnect.php';

$sql="select * from booking_order";
$res = mysqli_query($conn, $sql);
?>
<!doctype html>
<body>
      <div class="content pb-0">
         <div class="orders">
            <div class="row">
               <div class="col-xl-12">
                  <div class="card">
                     <div class="card-body">
                        <h4 class="box-title">Orders </h4>
                     </div>
                     <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                           <table class="table ">
                              <thead>
                                 <tr>
                                    <th class="serial">#</th>
                                    <th>ID</th>
                                    <th>Customer Name</th>                                    
                                    <th>Order Amount</th>
                                    <th>Order date</th>
                                    <th>Address</th>                                  
                                    <th>Order status</th>
                                 </tr>
                              </thead>
                              <tbody>
                              <?php
                                 $i=1;
                                 while($row=mysqli_fetch_assoc($res))
                                 {
                                    $sql1 = "SELECT *  FROM `user` WHERE `user_id` = $row[user_id_fk];";
                                    $r=mysqli_query($conn,$sql1);
                                    while($r1=mysqli_fetch_assoc($r)){
                                       $username=$r1['firstname'];
                                    }
                                       $sq="SELECT * FROM `user_address` WHERE `user_address_id` = $row[address_id]";
                                       $res1=mysqli_query($conn,$sq);
                                       while($row1=mysqli_fetch_assoc($res1)){
                                          $add=$row1['address'];
                                       }
                                 ?>

                                 <tr>
                                    <td class="serial"><?php echo $i;?></td>
                                    <td><?php echo $row['booking_order_id']?></td>
                                    <td><?php echo $username?></td>
                                    <td><?php echo $row['order_amount']?></td>
                                    <td><?php echo $row['order_date']?></td>
                                    <td><?php echo $add; ?></td>
                                    <td><?php echo $row['order_status']?></td>
                                 </tr>
                                 <?php
                              $i++;   
                              }

                                 ?>

                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <footer class="site-footer">
         <div class="footer-inner bg-white">
            <div class="row">
               <div class="col-sm-6">
                  Copyright &copy; 2023
               </div>

            </div>
         </div>
      </footer>
   </div>
   <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
   <script src="assets/js/popper.min.js" type="text/javascript"></script>
   <script src="assets/js/plugins.js" type="text/javascript"></script>
   <script src="assets/js/main.js" type="text/javascript"></script>
</body>
<?php
//   }
?>
</html>