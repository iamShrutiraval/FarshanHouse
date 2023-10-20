<?php include 'head.php'; 
 include 'dbconnect.php';
$id = $_GET['id'];

 $sql="select * from category where category_id=".$id;
      $res = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($res)
?>
<!doctype html>
<body>
      <div class="content pb-0">
         <div class="animated fadeIn">
            <div class="row">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="card-header"><strong>Category</strong></div>
                     <form method="post" action="handleupdateCat.php">
                     <div class="card-body card-block">
                        <input type="hidden" id="editid" name='editid' value="<?php echo $id;?>">
                     <div class="form-group"><label for="caname" class=" form-control-label">Category Name</label>
                     
                     <input type="text" id="caname" name='cname' placeholder="Enter Category Name" class="form-control" required value="<?php echo $row['category_name']?>"></div>
                        
                     
                     <div class="form-group"><label for="desc" class="form-control-label">Description</label>
                     
                     <input type="text" id="desc" name='cdesc' placeholder="Description" class="form-control" required value="<?php echo $row['category_description'];?>"></div>
                        
                     <!-- <label for="formFile" class="form-label">Select Category Image</label>
                         <input class="form-control" type="file" id="formFile"> -->
                     
                         <br>
                         <button id="submit" type="submit" class="btn btn-lg btn-info btn-block" name="Editcat">
                           <span id="payment-button-amount">Submit</span>
                        </button>
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

</html>