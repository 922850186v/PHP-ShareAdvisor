<?php include("connect\connect.php") ?>

<html>
    <head>
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css\style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container" >
            <div class="title">User Registration Form</div>
            <form method="post" action="signup.php">

            
                <div class="user-details">
                    <div class="input-box">
                        <span class="details" name="username">User Name</span>
                        <input type="text" name="username" placeholder="Enter Your Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details" name="email">Email</span>
                        <input type="email" name="email" placeholder="Enter Your Email" required>
                    </div>
                    <div class="input-box">
                        <span class="details" name="password_1" >Password</span>
                        <input type="password" name="password_1" placeholder="Enter a Password" required>
                    </div>
                    <div class="input-box">
                        <span class="details" name="password_2">Confirm Password</span>
                        <input type="password" name="password_2" placeholder="Confirm the Password" required>
                    </div>
                </div>
                <div class="gender-details" required>
                    <input type="radio" name="gender" value ="male" id="dot-1">
                    <input type="radio" name="gender" value ="female" id="dot-2">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender" name="gender" value ="m">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender" name="gender" value ="f">Female</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name ="reg_user" method="post" value= "Register!">
                </div>
                <p>Already a User? <a href="login.php"><b>Login Here!</b></a></p>
            </form>
        </div>
        <div name="result" id="result">
        
        
        </div>  
    </body>
</html>