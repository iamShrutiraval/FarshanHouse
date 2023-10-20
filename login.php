
<?php include 'head.php'; 
if(isset($_GET['LoginSuccess']) && $_GET['LoginSuccess'] ==  "false" )
{

    echo "<script>alert('Please Enter correct password');</script>";
    // exit();
}
?>
<style>
    .gradient-custom-2 {
        /* fallback for old browsers */
        background: #fccb90;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }

    .logintext{
        font-size: 30px;
        font-weight: 500;
    }

    .subtitle{
        font-size: 18px;
        font-weight: 400;
        text-align:center;
    }

    .subtitlesecond{
        font-size: 16px;
        font-weight: 600;
        text-align: center;
        margin-top: 40%;
    }

    .registerbutton{
        padding: 10px 140px;
        background-color: transparent;
        font-weight: 600;
        width: 100%;
        border-radius: 3px;
        position: relative;
        border:2px solid black;
        color: black;
        text-decoration: none;
    }

</style>
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100" style="margin-top:40px">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-3"></div>
                        <div class="card col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center mb-5">

                                    <h3 class="mt-1 mb-2 pb-1 logintext">Login</h3>
                                    <p class="subtitle">Please login to your account</p>
                                </div>


                                <form action="handleLogin.php" method="post">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Email </label>
                                        <input type="email" id="email" name="email" class="form-control"
                                               placeholder="Enter @gmail.com" required/>

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example22">Password</label>
                                        <input type="password" id="password" name="password" class="form-control"  placeholder="Enter your password" required/>

                                    </div>

                                    <div class="text-center pt-1 mb-3 pb-1">
                                        <button class="btn btn-outline-success  mb-3 pl-3" type="submit" name="Login">Log
                                            in</button><br>
                                        <a class="text-muted" href="forgot.php">Forgot password?</a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Don't have an account?</p>
                                        <a class="btn btn-outline-danger" href="Registration.php">Create new</a>
                                    </div>

                                </form>


                            </div>
                        </div>
                        <div class="col-lg-3"></div>

                                               <!-- <div class="col-lg-6 align-items-center">
                                                    <div class="subtitlesecond">
                                                        <p class="mb-4">Don't have an account?</p>
                                                        <a class="registerbutton">Create account</a>
                                                    </div>
                                                </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'foot.php'; ?>