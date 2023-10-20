<?php
// if ((!isset($_SESSION['Role']))) {
//    header('Location:../login.php');
// } else {

   include 'head.php';
   include 'dbconnect.php';

   $sql = "select * from category order by category_id";
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
                        <form action="add_cat.php" method="post">
                           <button type="submit" name='Addcat' class="btn btn-info">ADD Category</button><br><br>
                        </form>
                        <h6 class="box-title">Category List</h6>
                     </div>
                     <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                           <table class="table ">
                              <thead>
                                 <tr>
                                    <th class="serial">#</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 $i = 1;
                                 while ($row = mysqli_fetch_assoc($res)) {
                                 ?>
                                    <tr>
                                       <td class="serial"><?php echo $i ?></td>
                                       <td><?php echo $row['category_name'] ?></td>
                                       <td><?php echo $row['category_desc'] ?> </td>
                                       <td>
                                          <form action="handleCat.php" method="POST">

                                             <?php
                                             if ($row['category_status'] == 'Enable') {
                                                echo "<button class='btn btn-success' name='active' id='active'>Active</button>";
                                                echo "<input type='hidden' name='activeid' value='$row[category_id]'>";
                                             } elseif ($row['category_status'] == 'Disable') {
                                                echo "<button class='btn btn-danger' name='deactive' id='deactive'>Deactive</button>";
                                                echo "<input type='hidden' name='dactiveid' value='$row[category_id]'>";
                                             }
                                             echo "&nbsp;";
                                             echo "<a class='btn btn-primary' href='add_cat.php?id=" . $row['category_id'] . "'>EDIT</a>";


                                             ?>

                                          </form>
                                          <?php

                                          $i++;
                                          ?>

                                       </td>


                                    </tr>
                                 <?php } ?>

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