<?php
include 'dbConnect.php';
//add category in to the database
if (isset($_POST['Add_cat'])) {
  $catname = $_POST['cname'];
  $catdesc = $_POST['cdesc'];

  if (!$conn) {
    echo 'Connect does not exits ';
    

  } else {

    $sql = " INSERT INTO `category` (`category_name`, `category_desc`) VALUES ( '$catname', '$catdesc'); ";
    $result = mysqli_query($conn, $sql);

    if ($result) 
    {

      header("Location:/project/pf/project/Adminfinal/manage_Cat.php?");
    } 
    else 
    {
      echo 'The record was not inserted successfully because of this error..';
      mysqli_error($conn);
    }
  }
}
// edit category 
if(isset($_POST['Editcat']))
        {
          $catname=$_POST['cname'];
           $catdesc=$_POST['cdesc'];
            $id=$_POST['editid'];
            
            if(!$conn){
                die("Sorry we failed to connect:". mysqli_connect_error());
              }
              else{
                $sql=" update category set category_name='$catname',category_desc='$catdesc' where category_id='$id'";
                $result = mysqli_query($conn, $sql);
                if($result){
                  header("Location:/project/pf/project/Adminfinal/manage_Cat.php?");
                }
                else{
                  echo 'The record was not updated successfully because of this error..';
                  mysqli_error($conn);
                }
               } 

        }
  if(isset($_POST['active']))
  {
    $id=$_POST['activeid'];
    // echo "hello";
    $status='Disable';
    $update_cat="update category set category_status='$status' where category_id='$id'";
    $res=mysqli_query($conn,$update_cat);
    if($res)
    {
      header("Location:/project/pf/project/Adminfinal/manage_Cat.php?");
    }
    else{
      //give alert to admin not update
    }
  }
elseif(isset($_POST['deactive'])){
  $id=$_POST['dactiveid'];
    // echo "hello";
    $status='Enable';
    $update_cat="update category set category_status='$status' where category_id='$id'";
    $res=mysqli_query($conn,$update_cat);
    if($res)
    {
      header("Location:/project/pf/project/Adminfinal/manage_Cat.php?");
    }
    else{
      //give alert to admin not update
    }
}
?>