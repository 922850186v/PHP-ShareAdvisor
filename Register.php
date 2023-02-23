<?php include('Server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Registration Form</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="Enter the Username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="Enter the Email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" placeholder="Enter a Password" name="password1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" placeholder="Confirm the Password" name="password2">
  	</div>
      <div class="gender-input" required>
	  <input type="radio" name="gender" value ="Male" id="dot-1">
      <input type="radio" name="gender" value ="Female" id="dot-2">
	  <span class="gender-title">Gender</span>
            <div class="category">
             <label for="dot-1" >
                 <span class="dot one"></span>
                 <span class="gender" name="gender" value ="m">Male</span>
             </label>
            <label for="dot-2" >
            <span class="dot two"></span>
            <span class="gender" name="gender" value ="f">Female</span>
        </label>
        </div>
    </div>
  	<div class="input-group" class="button">
  	  <button type="submit" class="button" id="home-submit" name="reg_user">Register</button>
  	</div>
      
  	<p>
  		Already a member? <a href="login.php"><b>Login Here!</b></a>
  	</p>
	  <p id="copy">
	  &copy; <?php echo date("Y");?>, Vishva Isuranga
	  </p>
  </form>
  
  
</body>
</html>