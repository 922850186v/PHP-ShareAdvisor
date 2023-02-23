<?php

session_start();
error_reporting(0);

//define variables
$username = '';
$email = '';
$password_1 = '';
$gender = '';

//connect to db
$conn = mysqli_connect('localhost','root','', 'maindb') or die("unable to connect");

//register users

$username = $_POST['username'];
$email = $_POST['email'];
$password_1 = $_POST['password_1'];
$password_2 = $_POST['password_2'];
$gender = $_POST['gender'];
$password = md5($password_1);

$query = "SELECT * FROM udetails WHERE email='$email'";

$result = mysqli_query($conn, $query);

$num = mysqli_num_rows($result);
if($password_1 != $password_2){
    echo "Passwords Don't matching";
}
if($num ==1){
    echo "Email Already Exists";
}else{
    $reg = "INSERT INTO udetails(username,email,password,gender) 
    VALUES ('$username','$email','$password','$gender')";
    mysqli_query($conn , $reg);
    echo "Registration Successfull!";
    header('location: login.php');
}
?>
