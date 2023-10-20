
<?php
include 'dbConnect.php';
if (isset($_POST['addproduct'])) {
  $pname = $_POST['pname'];
  $category = $_POST['category'];
  $pdesc = $_POST['pdesc'];
  $qty = $_POST['qty'];
  $price = $_POST['price'];

  if (!$conn) {
    die("Sorry we failed to connect:" . mysqli_connect_error());
  } else {
    // this is for select category id for input
    $sql = "select category_id from category where category_name='$category'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($res);
    if ($res) {
      // $cid=$row['category_id'];
      $cid = $row[0];
    }
    //get image info
    if (isset($_FILES["image"]["name"])  || !empty($_FILES["image"]["name"])) {
      $pimage = strval($_FILES['image']['name']);
      $pimagetmp = strval($_FILES['image']['tmp_name']);
      $Product_image = pathinfo($pimage, PATHINFO_EXTENSION);

      //filter the image 
      if (strtolower($Product_image) == 'jpg' || strtolower($Product_image) == 'png' || strtolower($Product_image) == 'jpeg') {

        $location = 'images/';
        $Product_image = $location . $pimage;
        $ext = pathinfo($pimagetmp, PATHINFO_EXTENSION);
        move_uploaded_file($pimagetmp, $Product_image);
      } else {
        //write a code which give meassge to user enter only image

        // header("Location:/shruti/project/Adminfinal/add_product.php?");

      }
    }

    $sql = "INSERT INTO `product` (`c_id_fk`, `product_name`, `description`, `weight`, `price`, `product_statius`, `image`) 
    VALUES ('$cid', '$pname', '$pdesc', '$qty','$price', 'yes' , '$pimage'); ";
    $result = mysqli_query($conn, $sql);
    echo $email;
    if ($result) {
      echo 'data jato rahyo ';
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      header("Location:/project/pf/project/Adminfinal/manage_product.php?");
    } else {
      echo 'The record was not inserted successfully because of this error..';
      mysqli_error($conn);
    }
  }
}
if (isset($_POST['Editproduct'])) 
{
  
  $pid=$_POST['editid'];
  $pname = $_POST['pname'];
  $category = $_POST['category'];
  $pdesc = $_POST['pdesc'];
  $price = $_POST['price'];
  
  if (!$conn) {
    die("Sorry we failed to connect:" . mysqli_connect_error());
  } else {
    if (isset($_FILES["image"]["name"])  && !empty($_FILES["image"]["name"])) {
      $pimage = strval($_FILES['image']['name']);
      $pimagetmp = strval($_FILES['image']['tmp_name']);
      $Product_image = pathinfo($pimage, PATHINFO_EXTENSION);

      //filter the image 
      if (strtolower($Product_image) == 'jpg' || strtolower($Product_image) == 'png' || strtolower($Product_image) == 'jpeg') {

        $location = 'images/';
        $Product_image = $location . $pimage;
        $ext = pathinfo($pimagetmp, PATHINFO_EXTENSION);
        move_uploaded_file($pimagetmp, $Product_image);
      } else {
        //write a code which give meassge to user enter only image

        // header("Location:/shruti/project/Adminfinal/add_product.php?");

      }
    }
    else{

      
      $sql = "select image from product where product_id='$pid'";
      $res = mysqli_query($conn, $sql);
      if(mysqli_num_rows($res)>0){
          $row=mysqli_fetch_assoc($res);
          $pimage=$row['image'];
      }

    }
    $sql = "select category_id from category where category_name='$category'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($res);
    if ($res) {
      // $cid=$row['category_id'];
      $cid = $row[0];
    }
    $sql = "UPDATE `product` SET `c_id_fk` = '$cid',`product_name` = '$pname', `description` = '$pdesc', `price` = '$price' ,`image` = '$pimage' 
    WHERE `product_id` = '$pid' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      header("Location:/project/pf/project/Adminfinal/manage_product.php?");
    } else {
      echo 'The record was not inserted successfully because of this error..';
      mysqli_error($conn);
    }
  
  
  
  }
}
if(isset($_POST['active']))
  {
    $id=$_POST['activeid'];
    // echo "hello";
    $status='no';
    $update_pro="update product set product_statius='$status' where product_id='$id'";
    $res=mysqli_query($conn,$update_pro);
    if($res)
    {
      header("Location:/project/pf/project/Adminfinal/manage_product.php?");
    }
    else{
      //give alert to admin not update
    }
  }
elseif(isset($_POST['deactive'])){
  $id=$_POST['dactiveid'];
    // echo "hello";
    $status='yes';
    $update_cat="update product set product_statius='$status' where product_id='$id'";
    $res=mysqli_query($conn,$update_cat);
    if($res)
    {
      header("Location:/project/pf/project/Adminfinal/manage_product.php?");
    }
    else{
      //give alert to admin not update
    }
}
?>
