<?php 
session_start();
echo '

<link rel="stylesheet" href="css\navbar.css">
<nav class="navbar navbar-expand-lg navbar-light bg-warning.bg-gradient" id="navbar">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.php">
      <img src="images/home/logo.jpg" alt="" width="70" height="70">
    </a>
    
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">

          <a class="nav-link active" aria-current="page" href="#">Home</a>
        
          </li>
        <li class="nav-item">

          <a class="nav-link" href="#">Link</a>
        
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          
          Dropdown
          
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" id="wrap">
      ';

      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo "<b class='me-2'> " . $_SESSION['username'] . " </b>"; 
        echo '<a href="/svvr3/partials/logout.php" name="logout" class="btn btn-success me-2"> Logout </a>';
      }
      else
      {
        echo '

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#LoginModal">
          Login
        </button>
        <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#SignupModal">Signup
        </button>
        ';
      }
      echo '
      </form>
    </div>
  </div>
</nav>';
include "LoginModal.php";
include "SignupModal.php";

if ( isset($_GET['signupSuccess']) && $_GET['signupSuccess'] == "true" )
    {
        echo '  <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                    <strong>Success!</strong> You can now login.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    elseif( isset($_GET['signupSuccess']) && $_GET['signupSuccess'] == "false" )
    {
        echo '  <div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                    <strong>Error!</strong> '. $_GET['error'] .'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                
    }
?>