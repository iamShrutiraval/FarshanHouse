<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>JSH Farsan House</title>
   <link href="images/JSHlogofinal.png" rel="icon">
    <link href="images/JSHlogofinal.png" rel="apple-touch-icon">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/css/normalize.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/css/themify-icons.css">
   <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
   <link rel="stylesheet" href="assets/css/flag-icon.min.css">
   <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
</head>

<body>
   <aside id="left-panel" class="left-panel">
      <nav class="navbar navbar-expand-sm navbar-default">
         <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
               <li class="menu-title">Menu</li>
               
               <li class="menu-item-has-children dropdown">
                  <a href="manage_profile.php">Manage Profile</a>

               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="manage_Cat.php"> Category Master</a>

               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="manage_product.php"> Product Master</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="v_user.php"> User Master</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="or_index.php"> Order Master</a>
               </li>
            </ul>
         </div>
      </nav>
   </aside>
   <div id="right-panel" class="right-panel">
      <header id="header" class="header">
         <div class="top-left">
            <div class="navbar-header">
               <img src="images/JSHlogofinal.png" alt="Logo" height="40px">
               <!-- <a class="navbar-brand hidden" href="project\main.php"><img src="images/logo2.png" alt="Logo"></a> -->
               <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
         </div>
         <div class="top-right">
            <div class="header-menu">
               <div class="user-area dropdown float-right">
                  <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <?php echo $_SESSION['firstname']; ?></a>
                  <div class="user-menu dropdown-menu">
                     <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      
</body>
</html>