<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Form Page</title>
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
</head>

<body>
   <aside id="left-panel" class="left-panel">
      <nav class="navbar navbar-expand-sm navbar-default">
         <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
               <li class="menu-title">Menu</li>
               <li class="menu-item-has-children dropdown">
                  <a href="#"> Category Master</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="#"> Sub-Category Master</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="#"> Product Master</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="#"> User Master</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="#"> Order Master</a>
               </li>
            </ul>
         </div>
      </nav>
   </aside>
   <div id="right-panel" class="right-panel">
      <header id="header" class="header">
         <div class="top-left">
            <div class="navbar-header">
               <img src="images/JSHlogofinal.png" alt="Logo" height="40px"></a>
               <!-- <a class="navbar-brand hidden" href="index.html"><img src="images/logo2.png" alt="Logo"></a> -->
               <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
         </div>
         <div class="top-right">
            <div class="header-menu">
               <div class="user-area dropdown float-right">
                  <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">Welcome Admin</a>
                  <div class="user-menu dropdown-menu">
                     <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="content pb-0">
         <div class="animated fadeIn">
            <div class="row">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="card-header"><strong>Category</strong></div>
                     <div class="card-body card-block">
                        <div class="form-group"><label for="caname" class=" form-control-label">Category Name</label><input
                              type="text" id="caname" placeholder="Enter Category Name" class="form-control"></div>
                        <div class="form-group"><label for="desc" class="form-control-label">Description</label><input
                              type="text" id="desc" placeholder="Description" class="form-control"></div>
                        <button id="" type="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">Submit</span>
                        </button>
                     </div>
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