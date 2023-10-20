<?php include 'head.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <center>
    <div class="container" style="margin-top: 50px">
        <div class="card text-center" style="width: 400px;">
      
            <div class="mt-5  pb-1 logintext">Forgot password</div>
            <div class="card-body px-5">
                <p class="card-text py-2">
                    Please Forogot your Password
                </p>
                <div class="form-outline">
                    <input type="email" id="typeEmail" class="form-control my-3" placeholder="Enter your Email">
                    <input type="text" id="typenum" class="form-control my-3" placeholder="Enter your Phone number" maxlength="10">
                </div>
                <input type="submit" class="btn btn-primary w-100" name="submit" id="submit" value="Send OTP">     
                <div class="d-flex justify-content-between mt-4">
                    <a class="" href="login.php">Login</a>
                    <a class="" href="main.php">Home</a>
                </div>
            </div>
        </div>
    </div>
    </center>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body><br><br><br>
</html>
<?php include 'foot.php'; ?>