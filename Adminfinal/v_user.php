<?php 
      // session_start();
      // session_start();
      // if((!isset($_SESSION['Role'])))
      // {
      //    header('Location:../login.php');
      // }
      // else{
      include 'head.php';
      include 'dbconnect.php';

      $sql="select * from user order by user_id";
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
                        <h4 class="box-title">User List</h4>
                     </div>
                     <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                           <table class="table ">
                              <thead>
                                 
                                 <tr>
                                    <th class="serial">#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email ID</th>
                                    <th>Mobile Number</th>
                                 </tr>
                              </thead>
                              <tbody>
                              <?php
                                 $i=1;
                                 while($row=mysqli_fetch_assoc($res))
                                 {
                                 ?>
                                 <tr>
                                    <td class="serial"><?php echo $i?></td>
                                    <td><?php echo $row['firstname']?></td>
                                    <td><?php echo $row['lastname']?></td>
                                    <td><?php 
                                    $email1=$row['email_id'];
                                    echo strtolower($email1);
                                    // echo $email2;
                                    ?> </td>
                                    <td><?php 
                                    echo $row['mobile'];

                                    ?></td>
                                       
                              
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
// }
?>

</html>