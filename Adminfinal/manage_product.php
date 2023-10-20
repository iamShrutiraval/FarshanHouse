<?php
// if ((!isset($_SESSION['Role']))) {
//    header('Location:../login.php');
// } else {

   include 'head.php';
   include 'dbconnect.php';

   $sql = "select * from product order by product_id";
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
                        <form action="add_product.php" method="post">
                           <button type="submit" name='addproduct' class="btn btn-info">ADD Product</button><br><br>
                        </form>
                     </div>
                     <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                           <table class="table ">
                              <thead>
                                 <tr>
                                    <th class="serial">#</th>
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Category Name</th>
                                    <th colspan="2">Product Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 $i = 1;
                                 while ($row = mysqli_fetch_assoc($res)) {
                                 ?>
                                    <tr>
                                       <td class="serial"><?php echo $i ?></td>
                                       <td><?php echo $row['product_name'] ?></td>
                                       <td><img src="images/<?php echo $row['image'] ?>" width="150px" height="70"></td>
                                       <td><?php echo $row['description'] ?> </td>
                                       <td><?php echo $row['weight'] ?>gm </td>
                                       <td><?php echo $row['price'] ?> </td>
                                       <td><?php

                                             $cid = $row['c_id_fk'];
                                             $sql3 = "select category_name from category where category_id=$cid";
                                             $res2 = mysqli_query($conn, $sql3);
                                             $row2 = mysqli_fetch_assoc($res2);
                                             echo $row2['category_name'];
                                             ?> </td>
                                       <td >
                                          <form action="handleproduct.php" method="POST">
                                             <?php

                                             if ($row['product_statius'] == 'yes') {
                                                echo "<button class='btn btn-success' name='active' id='active'>Active</button>";
                                                echo "<input type='hidden' name='activeid' value='$row[product_id]'>";
                                             } elseif ($row['product_statius'] == 'no') {
                                                echo "<button class='btn btn-danger' name='deactive' id='deactive'>Deactive</button>";
                                                echo "<input type='hidden' name='dactiveid' value='$row[product_id]'>";
                                             }
                                             echo "</td>";
                                             echo "<td>";
                                             // echo "<br>";
                                             // echo "&nbsp;";
                                             echo "<a href='add_product.php?id=" . $row['product_id'] . "' class='btn btn-primary'>EDIT</a>";
                                             $i++;
                                             ?>
                                       </td>
                                    </tr>
                                    </form>
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