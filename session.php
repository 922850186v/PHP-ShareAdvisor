<?php 
  session_start(); 

  if (!isset($_SESSION['admin']) && !isset($_SESSION['ID'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: main.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['admin']);
  	header("location: main.php");
  }
?>