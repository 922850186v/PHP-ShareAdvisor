<?php include("connect\connect.php") ?>

<html>
    <head>
        <title>User Login Form</title>
        <link rel="stylesheet" href="css\style.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container"  >
            <div class="title">User Login Form</div>
            <form method="post" action="login.php">
   
                <div class="user-details">
                   <div class="input-box">
                        <span class="details" name="email">Email</span>
                        <input type="text" placeholder="Enter Your Email" required>
                    </div>
                    <div class="input-box">
                        <span class="details" name="password" >Password</span>
                        <input type="password" placeholder="Enter the Password" required>
                    </div>
                   
                </div>
                <div class="button">
                    <input type="submit" name ="login_user" method="post" value= "Login!">
                </div>
                <?php include('errors.php'); ?>
                <p>Don't Have an account? <a href="signup.php"><b>SignUp Here!</b></a></p>
            </form>
        </div>
        <div name="result" id="result">
        
        </div>
            
    </body>
</html>