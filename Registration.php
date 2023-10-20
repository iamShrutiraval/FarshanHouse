<?php include 'head.php' ?>
<!doctype html>
<html>

<head>
  
  <style>
            .error {
                color: red;
            }           
        </style>
  <link href="assets/css/style.css" rel="stylesheet">
  </link>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script type="text/javascript" language="javascript">
    function validate() {
    if (document.Registration.password.value != document.Registration.cpass.value) {
                    
                    document.getElementById('msg14').innerHTML = "*Please enter password same as above";
                    return false;
                }

    }
  </script>
</head>

<body>
  
  <div class="sufee-login d-flex align-left flex-wrap">
    <div class="container d-flex align-items-center justify-content-center my-5 border border-dark p-3 card text-left" style="width: 40vw;">
      <form action='#' method="POST" name="Registration">
        <center>
          <h1 style="align-content: center;">Create Account</h1>
        </center>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <label class="form-label">First name</label>
              <input type="text" id="fname" name="fname" class="form-control"/>
              <!-- <span id="msg1" style="color:red; font-weight:bold;"></span> -->
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <label class="form-label">Last name</label>
              <input type="text" id="lname" name="lname" class="form-control" required />
              <!-- <span id="msg2" style="color:red; font-weight:bold;"></span> -->
            </div>
          </div>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label">Mobile Number</label>
          <input type="text" id="mnumber" pattern="[789][0-9]{9}" name="mnumber" class="form-control" required />
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label">Email address</label>
          <input type="email" id="email" name="email" class="form-control" required />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label">Password</label>
          <input type="password" id="password" name="password" class="form-control" required />
        </div>
        <!--Confirm input -->
        <div class="form-outline mb-4">
          <label class="form-label">Confirm Password</label>
          <input type="password" id="cpass" name="cpass" class="form-control" />
          <span id="msg14" style="color:red;"></span>
        </div>

        <!-- Register buttons -->
        <center>
          <button type="submit" class="btn btn-outline-success btn-block mb-4" style="width: 40%;align-self:center;" name="create" onClick="return(validate());">Create</button>
        </center>
        <!-- Log in button -->
        <br>
        <center>
          <h4 class="justify-content-center">Already have an account?</h4><br>
        </center>
        <center> <a href="login.php" class="btn btn-primary btn-block mb-4" style="width: 40%;">Log in </a></center>

        <!-- Terms and condition-->
        <div class="d-flex justify-content-center ms-4">
          <p>By create,you agree to JSH Farsan House's <a href="#">Terms of use</a>
            and <a href="#">Privicy Policy</a></p>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
    $(document).ready(function() {
      $(Registration).validate({
        rules: {
          fname: {
            required: true
          },
          lname: {
            required: true
          },
          mnumber: {
            required: true,
            maxlength: '10'

          },
          password: {
            required: true,
            minlength:6,
            maxlength:10
          },
          email: {
            required: true
          }
        },
        messages: {
          fname: {
            required: '*This field is required'
          },
          lname: {
            requierd: '*This field is required'
          },
          mnumber: {
            required: '*This field is required',
            maxlength: 'enter maximum 10 numbers',
            
          },
          password: {
            required: '*This field is required',
            minlength:'Password must contain 6 character',
            maxlength:'Password should be less than 10 character'
          },
          email: {
            required: '*This field is required'
          }
        }
      })
    });
  </script>
    </form>
  </div>
  </div>
  
  <?php include 'foot.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
<?php
include 'dbConnect.php';
if (isset($_POST['create'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mno = $_POST['mnumber'];
  $email = $_POST['email'];
  $pass = $_POST['cpass'];

  if (!$conn) {
    die("Sorry we failed to connect:" . mysqli_connect_error());
  } else {
    // echo "Connection was succes<br>";
    //encrypt the password
    $encrypass = password_hash($pass, PASSWORD_DEFAULT);
    echo $mno;

    $sql = "INSERT INTO `user` (`firstname`, `lastname`, `mobile`,`email_id`, `password`,`terms_agree`) 
                VALUES ('$fname', '$lname', '$mno' ,'$email', '$encrypass', 'yes');";
    $res = mysqli_query($conn, $sql);

    if ($res) {
      echo '<script>window.location.href = "index.php";</script>';
      // header("Location:/shruti/project/main.php");
    } else {

      echo 'The record was not inserted successfully because of this error..';
      mysqli_error($conn);
    }
  }
}
?>