<?php include('Server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></link>
</head>
<body>
  <div class="header">
  	<h2>Login Form - modified</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="email" placeholder="Enter the Email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" id="password" placeholder="Enter the Password" >
		<span style="margin: 0.5% 0 0 1.5%; "><i  class="fa fa-eye" id="eye" >show</i></span>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="button" id="home-submit" name="login_user" >Login</button>
  	</div>
	<script>
		//Show / Hide Password
		let eye = document.getElementById("eye");
		let password = document.getElementById("password");
		let showPassword = false;

		eye.addEventListener("click", function(){
			if(showPassword == false){
				password.setAttribute("type", "text");
				eye.classList.add("fa-eye-slash");
				eye.classList.remove("fa-eye");
				eye.innerHTML = "hide";
				showPassword = true;
			} else {
				password.setAttribute("type", "password");
				eye.innerHTML = "show";
				eye.classList.add("fa-eye");
				eye.classList.remove("fa-eye-slash");
				showPassword = false;
			}
		});
	</script>
  	<p>
  		Not yet a member? <a href="register.php"><b>Register Here!</b></a>
  	</p>
	  <p id="copy">
	  &copy; <?php echo date("Y");?>, Vishva Isuranga
	  </p>
  </form>
  
</body>
</html>