<?php include 'head.php'; ?> 
<html>

<head>
    <title>Product Details page Design</title>

<body>
    <link href="style_p.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <div class="p_back">

        <div class="row">
            <div class="col-md-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../assets/img/img1.jpeg" alt="First slide">
                        </div>
                        <!-- <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/img2.jpeg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/img3.jpeg" alt="Third slide">
                        </div> -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-7">
                <p class="newarrival text-center">NEW</p>
                <h2>New Namkeen Available</h2>
                <p>Product code:12345</p>
                <img src="star.jpeg" class="stars">
                <p class ="price">150</p>
                <p><b>Availability: </b> In Stock</p>
                <p><b>Condition: </b> New</p>
                <p><b>Brand: </b> XYZ Company</p>
                <label>Quantity:</label>
                <input type="text" value="1">
                <button type="button" class="btn btn-warning">Add To Cart</button>
            </div>
        </div>

    </div>
</body>
</head>

</html>
<br><br><br>
<?php include 'foot.php'; ?>