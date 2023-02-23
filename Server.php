<?php
session_start();
error_reporting(0);

// initializing variables
$username = "";
$email    = "";
$gender = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'maindb');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error into $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password1)) { array_push($errors, "Password is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if ($password1 != $password2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM udetails WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if(($result) == 0){
    array_push($errors, "No Profile registered to this Username. Please check the credentials & try again.");
  }
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "One Profile already exists for this email");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $hashed_password = password_hash($password1, PASSWORD_DEFAULT);//encrypt the password before saving in the database
    
  	$query = "INSERT INTO udetails (username, email, password,gender) 
  			  VALUES('$username', '$email', '$hashed_password','$gender')";
    mysqli_query($db, $query);
  
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Welcome to Share Advisor";
  	header('location: home.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  if (count($errors) == 0) {
    
  	$query = "SELECT * FROM udetails WHERE email='$email'";
    $results = mysqli_query($db, $query);
    
    if((mysqli_num_rows($results)) == 1){
      $user  = mysqli_fetch_assoc($results);

      if(password_verify($password, $user['password']) == 1){ //decrypt password
        
        $_SESSION['username'] = $user['username'];
        $_SESSION['success'] = "Welcome " .$user['username'];
        $_SESSION['ID'] = $user['ID'];
        $_SESSION['email'] = $user['email'];
        header('location: home.php');
      }
      else {
        array_push($errors, "Wrong Password for the given Email");
      }
    
    }else{
      array_push($errors, "Wrong Email / Password combination");
    }
  }

  }
?>
