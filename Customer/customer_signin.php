<?php require_once('../config.php'); 
session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Customer login page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="signin/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="signin/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="signin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="signin/fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="signin/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="signin/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="signin/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="signin/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="signin/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="signin/css/util.css">
        <link rel="stylesheet" type="text/css" href="signin/css/main.css">
        <!--===============================================================================================-->
    </head>
    <style>
    
    p
    {   
        margin-top: -10px;
        margin-left: 46px;
        color: black;
        font-size: 18px;
    }
        

    </style>
    <body>
        
        <div class="limiter">
            <div class="container-login100" style="background-image: url('signin/images/splash-6.jpg');">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" method="post" action="customer_login_check.php">
                        <span class="login100-form-logo">
                            <i class="zmdi zmdi-landscape"></i>
                        </span>
                        <span class="login100-form-title p-b-34 p-t-27">
                            Customer Log in
                        </span>
                        <?php
                          if(isset($_GET['error_msg']) && $_GET['error_msg']==1){
                          echo "<p>Username Or Password is Incorrect! </p>";
                        }
                        ?>
                        <div class="wrap-input100 validate-input" data-validate = "Enter email">
                            <input class="input100" type="email" name="email" placeholder="Email">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                            Login
                            </button>
                        </div>
                        <div class="text-center p-t-90">
                            <a class="txt1" href="customer_signup.php">
                                New Customer SignUp
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div id="dropDownSelect1"></div>
        
        <!--===============================================================================================-->
        <script src="signin/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="signin/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="signin/vendor/bootstrap/js/popper.js"></script>
        <script src="signin/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="signin/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="signin/vendor/daterangepicker/moment.min.js"></script>
        <script src="signin/vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="signin/vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="signin/js/main.js"></script>
    </body>
</html>