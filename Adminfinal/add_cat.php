<?php 
   // // session_start();
   // if((!isset($_SESSION['Role'])))
   // {
   //    header('Location:../login.php');
   // }
   // else{

include 'head.php';
include 'dbconnect.php';
$msg = '';
//This is for diaplaying record for edit option   
if (isset($_GET['id']) && ($_GET != '')) {
   $id = $_GET['id'];
   $res = mysqli_query($conn, "select *from category where category_id='$id'");
   $row = mysqli_fetch_assoc($res);
   $category = $row['category_name'];
   $cdesc = $row['category_desc'];

}
?>
<!doctype html>

<body>
   <div class="content pb-0">
      <div class="animated fadeIn">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header"><strong>Category</strong></div>
                  <form method="post" action="handleCat.php"> <!--Starting of a form -->
                  <!-- for add new category -->
                     <div class="card-body card-block">
                        <?php
                        if (isset($_POST['Addcat'])) {
                        ?>
                           <div class="form-group"><label for="caname" class=" form-control-label">Category Name</label>

                              <input type="text" id="cname" name="cname" placeholder="Enter Category Name" class="form-control" required>
                           </div>


                           <div class="form-group"><label for="desc" class="form-control-label">Description</label>

                              <input type="text" id="cdesc" name="cdesc" placeholder="Description" class="form-control" required>
                           </div>
                           <br>
                           <button id="submit" type="submit" class="btn btn-lg btn-info btn-block" name="Add_cat">
                              <span id="payment-button-amount">Submit</span>
                           </button>
                        <?php
                        } else {

                        ?>
                        <!-- This for edit a category -->
                           <input type="hidden" id="editid" name='editid' value="<?php echo $id;?>">
                           <div class="form-group"><label for="caname" class=" form-control-label">Category Name</label>

                              <input type="text" id="catname" name="cname" placeholder="Enter Category Name" class="form-control" required value="<?php echo $category ?>">
                           </div>


                           <div class="form-group"><label for="desc" class="form-control-label">Description</label>

                              <input type="text" id="catdesc" name="cdesc" placeholder="Description" class="form-control" required value="<?php echo $cdesc ?>">
                           </div>
                           <br>
                           <button id="submit" type="submit" class="btn btn-lg btn-info btn-block" name="Editcat">
                              <span id="payment-button-amount">Submit</span>
                           </button>
                        <?php
                        }
                        ?>

                        <!-- <label for="formFile" class="form-label">Select Category Image</label>
                         <input class="form-control" type="file" id="formFile"> -->

                        <!-- <br>
                         <button id="submit" type="submit" class="btn btn-lg btn-info btn-block" name="Addcat">
                           <span id="payment-button-amount">Submit</span>
                        </button> -->
                     </div>
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