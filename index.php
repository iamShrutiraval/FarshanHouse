<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JSH Farsan House</title>
    <link href="assets\img\JSHlogo.png" rel="icon">
    <link href="assets\img\JSHlogo.png" rel="apple-touch-icon">

    <!--main css of file -->

    <link href="assets/css/style.css" rel="stylesheet">
    </link>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .wi {
            padding: 25px;
            margin: 34px;
            background-color: antiquewhite;
            padding-left: 30px;
        }

        .announcement-bar {
            background: #915531;
            color: #fff;
            font-size: calc(var(--typeBaseSize)*.75);
            position: relative;
            text-align: center;
            padding: 10px;
            border-bottom-color: #e8e8e1;
            border-bottom-color: var(--colorBorder);
        }

        .hover :hover {
            border: 2px solid red;

        }

        .titleforcat {
            color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 2.5ch;

        }
    </style>
</head>


<body>
    <section style="background: url(background.png) no-repeat; background-size:cover;">
    <?php include 'head.php' ?>
    <!-- <section id="home"> -->
        <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="assets/img/khakhra.jpg" class="d-block w-100 backimg" alt="...">
                    <div class="banner-text">
                        <h1 class="title"> Top selling!</h1>
                        <h2 class="desc1">khakhra</h2>
                        <!-- <a style="text-decoration: none;" href="product_cardn.php?name=Khakhra" class="btn btn-danger text-uppercase mt-4" name="por" id="por"><button>Shop Now</button></a> -->
                        <!-- <a href="product_cardn.php?name=Khakhra" class="btn btn-danger text-uppercase mt-4">Shop Now</a> -->
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="assets/img/6.jpg" class="d-block w-100 backimg" alt="...">
                    <div class="banner-text">
                        <h1 class="title">Top selling!</h1>
                        <h2 class="desc1">Namken</h2>
                        <!-- <a href="#" class="btn btn-danger text-uppercase mt-4">Shop Now</a> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/biscuit.jpg" class="d-block w-100 backimg" alt="...">
                    <div class="banner-text">
                        <h1 class="title">Top selling!</h1>
                        <h2 class="desc1">Khajur biscuit</h2>
                        <!-- <a href="#" class="btn btn-danger text-uppercase mt-4">Shop Now</a> -->
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <!-- <span class="visually-hidden">Previous</span> -->
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <!-- <span class="visually-hidden">Next</span> -->
            </button>
        </div>
    </section>
    <!-- <div class="container-fluid" style="position:relative; z-index: 10; width:350vh; box-sizing: border-box;">
        <img class="img-fluid" src="border.png">
        </div> -->
    <div class="announcement-bar mt-4">
        <span class="announcement-text" style="color: #fff;">Welcome Food Lovers!!</span>
    </div>
    <!-- sliding image end-->

    <!-- <br> -->
        <section id="portfolio" class="portfolio" style="background: url(background.png) no-repeat; background-size:cover;">
            <!-- <div class="announcement-bar mb-5">
                <span class="announcement-text" style="color: #fff;">Welcome Food Lovers!!</span>
            </div>   -->
        <div class="container">

            <div class="row">

                <div class="col-lg-12 d-flex justify-content-center">

                    <ul id="portfolio-flters"
                        style="position: relative; display: flex; justify-content: space-evenly; align-items: center;"
                        class="container-fluid">
                        <li class="" style="border: 5px solid white; padding:0%;  width:15vw; ">
                            <div class="main-block wi" style="margin:0% ;height: 50%;">
                                <a style="text-decoration: none;" href="product_cardn.php?name=Khakhra" name="por" id="por">
                                <div class="icon-block">


                                        <!-- <span><img class="img-fluid" src="//cdn.shopify.com/s/files/1/0524/5707/8955/files/Khakhra_686d4c48-5b30-42ae-b23d-e86c0ab3633d_small.png?v=1628511072"></span> -->
                                        <span><img class="img-fluid" src="khakhra1.jpg"></span>

                                    </div>
                                    <div class="service-text">
                                        <br>
                                        <p class="titleforcat" name="por" id="por">Khakhra</p>


                                        <!-- <p>88 Varieties</p> -->

                                    </div>
                                </a>
                            </div>

                        </li>
                        <li class="" style="border: 5px solid white; padding:0% ; width:15vw;  ">
                            <div class="main-block wi" style="margin:0% ;height: 50%;">
                                <a style="text-decoration: none;"  href="product_cardn.php?name=papad" name="por" id="por">
                                    <div class="icon-block">


                                        <span><img class="img-fluid" src="papad.jpg"></span>


                                    </div>
                                    <div class="service-text">
                                        <br>
                                        <p class="titleforcat">Papad</p>


                                        <!-- <p>10 Varieties</p> -->

                                    </div>
                                </a>
                            </div>

                        </li>
                        <li class="" style="border: 5px solid white; padding:0% ; width:15vw;">
                            <div class="main-block wi" style="margin:0% ;height: 50%;">
                                <a style="text-decoration: none;"  href="product_cardn.php?name=chawana" name="por" id="por">
                                    <div class="icon-block">


                                        <span><img class="img-fluid" src="namkeen3.jpg"></span>


                                    </div>
                                    <div class="service-text">
                                        <br>
                                        <p class="titleforcat">Namken</p>


                                        <!-- <p>25 Varieties</p> -->

                                    </div>
                                </a>
                            </div>

                        </li>
                        <li class="" style="border: 5px solid white; padding:0% ; width:15vw;">
                            <div class="main-block wi" style="margin:0% ;height: 50%;">
                                <a style="text-decoration: none;"  href="product_cardn.php?name=Sweet%20Thooth" name="por" id="por">
                                    <div class="icon-block">


                                        <span><img class="img-fluid" src="chiki.jpg"></span>


                                    </div>
                                    <div class="service-text">
                                        <br>
                                        <p class="titleforcat">Sweet Thooth</p>


                                        <!-- <p>20 Varieties</p> -->

                                    </div>
                                </a>
                            </div>

                        </li>

                    </ul>
                </div>
            </div>

    </section>
    <?php #include 'cardd.php'; ?>

    <?php include 'foot.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- </section> -->
    </body>

</html>