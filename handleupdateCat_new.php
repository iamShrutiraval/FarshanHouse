<?php 
        include 'dbConnect.php';
        if(isset($_POST['Editcat']))
        {
            $catname=$_POST['cname'];
            $catdesc=$_POST['cdesc'];
$id=$_POST['editid'];
            
            if(!$conn){
                die("Sorry we failed to connect:". mysqli_connect_error());
              }
              else{
                $sql=" update category set category_name='$catname',category_description='$catdesc' where category_id='$id'";
                $result = mysqli_query($conn, $sql);
                if($result){
                  header("Location:http://localhost/jsh_food/Admin/Adminfinal/manage_Cat.php");
                }
                else{
                  echo 'The record was not updated successfully because of this error..';
                  mysqli_error($conn);
                }
               } 

        }
?>
