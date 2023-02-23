<?php

session_start();
error_reporting(0);

//define variables
$username = '';
$email = '';
$password_1 = '';
$gender = '';

$errors = array();

//connect to db
$conn = mysqli_connect('localhost','root','', 'maindb') or die("unable to connect");

//register users

$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);


//form validation

if($password_1 != $password_2) {array_push($errors, "Passwords do not match");}

//check db for existing users and emails

$user_check_query = "SELECT * FROM udetails WHERE email='$email' LIMIT 1"; 

$result = mysqli_query($conn, $user_check_query ) or die(mysqli_error($conn));
$user = mysqli_fetch_assoc($result);

if($user) {
        if($user['email'] == $email) {array_push($errors, "Email Already exists");}
}


//register user if no errors
if(count($errors) === 0){

     //this will encrypt the password
    $query = "INSERT INTO udetails (username,email,password,gender) VALUES ('$username','$email','$password_1','$gender')";

    mysqli_query($conn, $query);
    $_SESSION['email'] = $email;
    if($_SESSION['success']){
        
        echo "You are Logged In Successfully!";
    }    
    
    header ('location:login.php');
    
}

//login user
if(isset($_POST['login_user'])){

    $email = mysqli_real_escape_string($conn , $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn , $_POST['password']);

    if(empty($email)){
        array_push($errors, "Email is required");
    }
    if(empty($password_1)){
        array_push($errors, "Password is required");
    }

    if(count($errors) == 0){
        

        $query = "SELECT * FROM udetails WHERE email='$email' AND password='$password_1'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)){

            $_SESSION['username'] = $username;
            $_SESSION['sucess'] = "Logged in Successfully!";

            header("location : home.php");
        }else{
            array_push($errors , "Wrong username / password combination. Please try again. ");
        }
    }
}


?>