<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Customer SignUp page</title>
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Font-->
        <link rel="stylesheet" type="text/css" href="signup/css/nunito-font.css">
        <!-- Main Style Css -->
        <link rel="stylesheet" href="signup/css/style.css"/>
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

    <body class="form-v6">
        <div class="page-content">
            <div class="form-v6-content">
                <div class="form-left">
                    <img src="signup/images/bg_signup.jpg" alt="form">
                </div>
                <form class="form-detail" action="insert_customer.php" method="post">
                    <h2>Register Form</h2>
                     <?php
                          if(isset($_GET['error_msg']) && $_GET['error_msg']==1){
                          echo "<p>This Email already in use! </p>";
                        }
                        ?>
                    <div class="form-row">
                        <input type="text" name="customer_name" id="full-name" class="input-text" placeholder="Your Name" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="email" id="your-email" class="input-text" placeholder="Email Address" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                    </div>
                    <div class="form-row">
                        <input type="password" name="password" id="password" class="input-text" placeholder="Password" required>
                    </div>
                    <!-- <div class="form-row">
                        <input type="password" name="comfirm-password" id="comfirm-password" class="input-text" placeholder="Comfirm Password" required>
                    </div> -->
                    <div class="form-row-last">
                        <input type="submit" name="register" class="register" value="Register">
                    </div>

                    <div class="text-center p-t-90">
                            <a class="txt1" href="customer_signin.php">
                                Already Registered then Signin
                            </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>