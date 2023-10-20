<?php

session_start();
// if ((!isset($_SESSION['Role']))) {
//    // header('Location:../login.php');
//    echo "<script>alert('you are not admin');</script>";
// } else {

   include 'head.php';
   include 'dbconnect.php';
   //This is for diaplaying record for edit option   
   if (isset($_GET['id']) && ($_GET != '')) {
      $pid = $_GET['id'];
      $res = mysqli_query($conn, "select *from product where product_id='$pid'");
      $row = mysqli_fetch_assoc($res);
      $product = $row['product_name'];
      $pdesc = $row['description'];
      $price = $row['price'];
      $pimage = $row['image'];
      $cid = $row['c_id_fk'];
      //for display category name in dropdownlist
      $res2 = mysqli_query($conn, "select category_name from category where category_id='$cid'");
      $row2 = mysqli_fetch_assoc($res2);
   }

?>
   <!doctype html>

   <body>

      <div class="content pb-0">
         <div class="animated fadeIn">
            <div class="row">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="card-header"><strong>Product</strong></div>
                     <form method="post" action="handleproduct.php" enctype="multipart/form-data">

                        <div class="card-body card-block">
                           <!-- for add product thid form is display -->
                           <?php
                           if (isset($_POST['addproduct'])) {
                           ?>
                              <div class="form-group"><label for="product" class=" form-control-label">Product Name</label>
                                 <input type="text" id="pname" name="pname" placeholder="Enter Product Name" class="form-control" required>
                              </div>

                              <div class="form-group"><label for="catname" class="form-control-label">Select Category Name:-</label>&nbsp;&nbsp;
                                 <?php
                                 $qry1 = ("select *from category");
                                 $result = mysqli_query($conn, $qry1);
                                 $rowcount = mysqli_num_rows($result);
                                 ?>
                                 <!--Dropdown -->
                                 <select name="category" id="category"  class="btn btn-info dropdown-toggle" required>
                                    <option value="" selected disabled>Select above option</option>
                                    <?php

                                    for ($i = 1; $i <= $rowcount; $i++) {
                                       $row = mysqli_fetch_array($result)

                                    ?>
                                       <!-- It's display a option for dropdown and take a value-->
                                       <option value="<?php echo $row["category_name"] ?>"><?php echo $row["category_name"] ?></option>

                                    <?php
                                    }
                                    ?>

                                 </select>
                              </div>

                              <div class="form-group"><label for="desc" class="form-control-label">Description</label>
                                 <input type="text" id="pdesc" name="pdesc" placeholder="Description" class="form-control" required>
                              </div>

                              <div class="form-group"><label for="weight" class="form-control-label">Quantity</label>
                                 <input type="text" id="qty" name="qty" placeholder="Quntity" class="form-control" required>
                              </div>

                              <div class="form-group"><label for="price" class="form-control-label">Price</label>
                                 <input type="text" id="price" name="price" placeholder="Enter Price Rs." class="form-control" required>
                              </div>

                              <label for="formFile" class="form-label">Select Product Image</label>
                              <input class="form-control" type="file" id="image" name="image"><br>

                              <button id="addproduct" type="submit" name="addproduct" class="btn btn-lg btn-info btn-block">
                                 <span id="payment-button-amount">Submit</span>
                              </button>
                        </div>
                     <?php
                           } else { ?>
                        <!-- for edit a product this form is display -->
                        <div class="card-body card-block">

                           <input type="hidden" id="editid" name="editid" value="<?php echo $pid; ?>">

                           <div class="form-group"><label for="product" class=" form-control-label">Product Name</label>
                              <input type="text" id="pname" name="pname" placeholder="Enter Product Name" class="form-control" value="<?php echo $product ?>" required>
                           </div>

                           <div class="form-group"><label for="catname" class="form-control-label">Select Category Name:-</label>&nbsp;&nbsp;
                              <?php
                              $qry1 = ("select *from category");
                              $result = mysqli_query($conn, $qry1);
                              $rowcount = mysqli_num_rows($result);

                              ?>
                              <!--Dropdown -->
                              <select name="category" id="category" name="category" class="btn btn-info dropdown-toggle" required>

                                 <option value="<?php echo $row2["category_name"] ?>"><?php echo $row2["category_name"] ?></option>
                                 <?php

                                 for ($i = 1; $i <= $rowcount; $i++) {
                                    $row = mysqli_fetch_array($result)

                                 ?>
                                    <!-- It's display a option for dropdown and take a value-->
                                    <option value="<?php echo $row["category_name"] ?>"><?php echo $row["category_name"] ?></option>

                                 <?php
                                 }
                                 ?>

                              </select>
                           </div>
                           <div class="form-group"><label for="desc" class="form-control-label">Description</label>
                              <input type="text" id="pdesc" name="pdesc" placeholder="Description" class="form-control" value="<?php echo $pdesc ?>" required>
                           </div>

                           <div class="form-group"><label for="price" class="form-control-label">Price</label>
                              <input type="text" id="price" name="price" placeholder="Enter Price Rs." class="form-control" value="<?php echo $price ?>" required>
                           </div>

                           <label for="formFile" class="form-label">Select Product Image</label>
                           <img src="images/<?php echo $pimage ?>" width="150px" height="70">
                           <input class="form-control" type="file" id="image" name="image" value="<?php echo $pimage ?>"><br>

                           <button id="Editproduct" type="submit" name="Editproduct" class="btn btn-lg btn-info btn-block">
                              <span id="payment-button-amount">Submit</span>
                           </button>

                        </div>


                     <?php
                           }
                     ?>

                     </form>
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