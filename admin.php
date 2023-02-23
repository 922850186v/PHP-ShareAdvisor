<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
  <div class="header">
  	<h2>Admin Login</h2>
  </div>
	 <div id="table" name="table">
  <form id ="input" method="post" action="admin.php">
   	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Enter the Admin Username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter the Admin Password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="button" id="submit" name="login_admin">Login Admin</button>
  	</div>
	  <p id="copy">
	  &copy Vishva Isuranga
	  </p>
  </form>
  </div>

<?php 

session_start();
error_reporting(0);

// initializing variables
$errors = array(); 
$success = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'maindb');
if (isset($_POST['login_admin'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty(trim(($username)))) {
       array_push($errors,"Admin Username is required") ;
    }
    if (empty($password)) {
      array_push($errors,"Admin Password is required") ;
    
    }elseif($username!='Admin'){
      array_push($errors,"Only the Administrator can login here") ;
    }

    if (count($errors) == 0) {
      
      $query = "SELECT * FROM udetails WHERE username='Admin'";
      $results = mysqli_query($db, $query);
      $admin = mysqli_fetch_assoc($results);
        if (mysqli_num_rows($results) == 1 ) {
          if(password_verify($password, $admin['password'])){
            $_SESSION['admin'] = $admin['username'];
            $_SESSION['ID'] = $admin['ID'];
            $_SESSION['success'] = "You are now logged in";
              header('location: admin-home.php');
          }else{
            array_push($errors,"Wrong Admin password!") ;
            
          }
                
         
        }
      
        
    }
  }
?>
<?php
    if(!empty($errors)){
    echo '<div class="errmsg">';
    foreach ($errors as $error);
    echo $error;
}
?>
<?php
    if(!empty($success)){
    echo '<div class="success">';
    foreach ($success as $success);
    echo $success;
}
?>
</body>
</html>