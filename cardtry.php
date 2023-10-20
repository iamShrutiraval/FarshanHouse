<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
body{
    background-color:#dce3f0;
}

.height{
    
    height:100vh;
}

.card{
    
    width:350px;
    height:370px;
}

.image{
    position:absolute;
    /* right:12px; */
    /* top:10px; */
}

.main-heading{
    
    font-size:40px;
    color:red !important;
}

.ratings i{
    
    color:orange;
    
}

.user-ratings h6{
    margin-top:2px;
}

.colors{
    display:flex;
    margin-top:2px;
}

.colors span{
    width:15px;
    height:15px;
    border-radius:50%;
    cursor:pointer;
    display:flex;
    margin-right:6px;
}

.colors span:nth-child(1) {
    
    background-color:red;
    
}

.colors span:nth-child(2) {
    
    background-color:blue;
    
}

.colors span:nth-child(3) {
    
    background-color:yellow;
    
}

.colors span:nth-child(4) {
    
    background-color:purple;
    
}

.btn-danger{
    
    height:48px;
    font-size:18px;
}

</style>
</head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
<?php
for($i=0;$i<5;$i++)
{
?>
<div class="height d-flex ">
    
    <div class="card p-3">
        
        <div class="d-flex justify-content-between align-items-center ">
            <div class="mt-2">
                
                <div class="mt-5">
                    <!-- <h5 class="text-uppercase mb-0">Blanda Matt</h5> -->
                    <!-- <h1 class="main-heading mt-0">VASE</h1> -->
                    <div class="d-flex flex-row user-ratings">
                        <!-- <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        </div>
                        <h6 class="text-muted ml-1">4/5</h6> -->
                    </div>
                </div>
            </div>
            
            <div class="card-img-top">
                <img src="https://i.imgur.com/MGorDUi.png" width="200">
            </div>
        </div>
        
        <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
        <h4 class="text-uppercase">Ikea</h4>
            <!-- <span>Available colors</span>
            <div class="colors">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div> -->
            
        </div>
        
        
        <p>A great option weather you are at office or at home. </p>
        
        <button class="btn btn-danger">Add to cart</button>
    </div>
    
</div>
<?php
}
?>
</body>
</html>