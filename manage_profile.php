<?php
// session_start();
// if($_SESSION['loggedin']==true){


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css_modal.css">
    <title>Hello, world!</title>
</head>

<body>
    <?php
   // session_start();
         include "dbconnect.php";
        include "head.php";
        include "editprofile_modal.php";
        
        if(isset($_SESSION['id'])){
        $sql = "SELECT *  FROM `user` WHERE `user_id` = 30;";
        $row=mysqli_query($conn,$sql);
        while($res=mysqli_fetch_assoc($row)){
            $fname=$res['firstname'];
            $lname=$res['lastname'];
            $email=$res['email_id'];
            
        }
        ?>
    <div class="content pb-0">
        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title ms-4 mb-0">Manage profile</h2>

                            <div class="myprofright d-flex justify-content-center align-items-center">
                                <div class="container-xl px-4 mt-4">
                                    <!-- Account page navigation-->
                                    <hr class="mt-0 mb-4">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <!-- Profile picture card-->
                                            <div class="card mb-4 mb-xl-0">
                                                <div class="card-header">Profile Picture</div>
                                                <div class="card-body text-center">
                                                    <!-- Profile picture image-->
                                                    <img class="img-account-profile rounded-circle mb-2"
                                                        src="images/user.jpeg" alt="">
                                                    <!-- Profile picture help block-->
                                                    <!-- Profile picture upload button-->
                                                    <button class="btn btn-primary" type="button" onclick="openedimodal()">Edit profile picture
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <!-- Account details card-->
                                            <div class="card mb-4">
                                                <div class="card-header">Account Details</div>
                                                <div class="card-body">
                                                    <form action="#" method="POST">
                                                        <!-- Form Group (username)-->
                                                        <div class="mb-3">
                                                            <label class="small mb-1"
                                                                for="inputUsername">Username</label>
                                                            <input class="form-control" id="inputUsername" type="text"
                                                                value="<?php echo $fname.$lname;?>">
                                                        </div>
                                                        <!-- Form Row-->
                                                        <div class="row gx-3 mb-3">
                                                            <!-- Form Group (first name)-->
                                                            <div class="col-md-6">
                                                                <label class="small mb-1" for="inputFirstName">First
                                                                    name</label>
                                                                <input class="form-control" id="inputFirstName"
                                                                    type="text" value="<?php echo $fname;?>">
                                                            </div>
                                                            <!-- Form Group (last name)-->
                                                            <div class="col-md-6">
                                                                <label class="small mb-1" for="inputLastName">Last
                                                                    name</label>
                                                                <input class="form-control" id="inputLastName"
                                                                    type="text"value="<?php echo $lname;?>">

                                                            </div>
                                                        </div>
                                                        <!-- Form Row        -->
                                                        <!-- Form Group (email address)-->
                                                        <div class="mb-3">
                                                            <label class="small mb-1" for="inputEmailAddress">Email
                                                                address</label>
                                                            <input class="form-control" id="inputEmailAddress"
                                                                type="email" value="<?php echo $email;?>" disabled>
                                                        </div>
                                                        <!-- <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input type="password" class="form-control"
                                                                id="exampleInputPassword1" placeholder="Enter Password">
                                                        </div> -->
                                                        <!-- Form Row-->
                                                        <!-- Save changes button-->
                                                        <button class="btn btn-primary" type="button" name="save" id="save">Save
                                                            changes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onclick="closeeditmodal()">&times;</button>
                    <h4 class="modal-title">Edit profile picture</h4>
                </div>
                <form method="post" action="manage_profile.php" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="mb-3">
                      <label class="small mb-1"  for="inputfile">Choose your profile photo</label>
                      <input class="form-control" id="inputfile" type="file"/>
                  </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-success">Upload</button>
                    <button type="button" class="btn btn-default" onclick="closeeditmodal()">Close</button>
                </div>
                </form>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"> -->
    </script>

<script>
  function openedimodal(){
    $("#myModal").modal('show');
  }

  function closeeditmodal(){
    $("#myModal").modal('hide');
  }

  </script>
</body>
<?php }
else {
    echo "<script>alert('not login');</script>";
}?>
<?php
// }
if(isset($_POST['save']))
{
    echo $first=$_POST['first'];
    $last=$_POST['last'];
    $nemail=$_POST['email'];
    // echo $fname;
    $qry2="UPDATE `user` SET `firstname` = '$first',`lastname` = '$last' WHERE `email_id` = '$nemail';";
    $res=mysqli_query($con,$qry2);
    if($res){
        echo "<script>alert('hello');</script>";
    }
    else{
        echo "<script>alert('hello');</script>";
    }
}
?>

</html>
<?php ?>