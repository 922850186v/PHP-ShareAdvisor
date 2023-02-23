<?php
error_reporting(0);
    //connect to db
$server = "localhost" ;
$username = "root" ;
$password = "" ; 
$dbname = "maindb" ;

$_industry = "";

$errors = array(); 
$success = array();
$db = mysqli_connect($server, $username, $password, $dbname) or die("unable to connect");
// define variables and set to empty values
    //Index page values submit
    if (isset($_POST['industry_add'])) {
        // receive all input values from the form
        $_industry = mysqli_real_escape_string($db,$_POST['industry']);
        $_ipbv = mysqli_real_escape_string($db,$_POST['ipbv']);
        $_ipe = mysqli_real_escape_string($db,$_POST['ipe']);
        // $req_fields = array('scode','cname','eps','epsincrease','nav','mps','dps','industry');
    
    //checking empty fields
if(empty(trim($_industry))){array_push($errors, "Select an Industry");}
if(empty(trim($_ipbv))){array_push($errors, "Fill the IPBV field");}
if(empty(trim($_ipe))){array_push($errors, "Fill the IPE field");}
// $share_check_query = "SELECT * FROM idetails WHERE industry='$_industry' LIMIT 1";
// $result = mysqli_query($db, $share_check_query);
// $share = mysqli_fetch_assoc($result);
// if ($share) { // if share exists
// if ($share['industry'] === $_industry) {
// array_push($errors, "Industry already exists");
// }
// }
if (count($errors) == 0) {

$query = "UPDATE idetails SET ipbv='$_ipbv',ipe='$_ipe' WHERE industry ='$_industry'";

mysqli_query($db, $query);
array_push($success,"Record Edited Successfully!") ;
 
  }
    }
?>