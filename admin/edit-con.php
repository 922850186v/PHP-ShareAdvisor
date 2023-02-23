<?php 
$server = "localhost" ;
$username = "root" ;
$password = "" ; 
$dbname = "maindb" ;

$new_scode = "";
$new_cname = "";
$new_eps = "";
$new_epsincrease = "";
$new_nav = "";
$new_mps = "";
$new_dps = "";
$new_dividendc = "";
$new_dividends = "";
$new_d1 = "";
$new_d2 = "";
$new_d3 = "";
$new_d4 = "";
$new_d5 = "";
$new_fyear = "";
$new_industry = "";
$dtype = "";
$delete = "";

error_reporting(0);
$errors = array(); 
$success = array();
$db = mysqli_connect($server, $username, $password, $dbname) or die("unable to connect");
// if(isset($_GET['get_details'])){

//     if(empty(trim($_cname))){
//         array_push($errors, "Please select a Company Name");   
//     }
// }


if (isset($_POST['edit_submit'])) {
    // receive all input values from the form
    $new_scode = mysqli_real_escape_string($db, $_POST['new_scode']);
    $new_cname = mysqli_real_escape_string($db, $_POST['new_cname']);
    $new_eps1 = mysqli_real_escape_string($db, $_POST['new_eps1']);
    $new_eps2 = mysqli_real_escape_string($db, $_POST['new_eps2']);
    $new_eps3 = mysqli_real_escape_string($db, $_POST['new_eps3']);
    $new_eps4 = mysqli_real_escape_string($db, $_POST['new_eps4']);
    $new_epsincrease = mysqli_real_escape_string($db, $_POST['new_epsinc']);
    $new_quarter = mysqli_real_escape_string($db, $_POST['new_quarter']);
    $new_nav = mysqli_real_escape_string($db, $_POST['new_nav']);
    $new_mps = mysqli_real_escape_string($db, $_POST['new_mps']);
    $new_dps = mysqli_real_escape_string($db, $_POST['new_dps']);
    $new_dividendc = mysqli_real_escape_string($db,$_POST['dividendc']);
    $new_dividends = mysqli_real_escape_string($db,$_POST['dividends']);
    $new_d1 = mysqli_real_escape_string($db,$_POST['d1']);
    $new_d2 = mysqli_real_escape_string($db,$_POST['d2']);
    $new_d3 = mysqli_real_escape_string($db,$_POST['d3']);
    $new_d4 = mysqli_real_escape_string($db,$_POST['d4']);
    $new_d5 = mysqli_real_escape_string($db,$_POST['d5']);
    $new_fyear = mysqli_real_escape_string($db, $_POST['dfyear']);
    $new_industry = mysqli_real_escape_string($db, $_POST['new_industry']);
    $delete = mysqli_real_escape_string($db, $_POST['delete_record']);

    

    if(empty(trim($new_cname))){array_push($errors, "Company Name is required");}
    // if(empty(trim($new_eps1))){array_push($errors, "EPS1 is required");}
    // if(empty(trim($new_eps2))){array_push($errors, "EPS2 is required");}
    // if(empty(trim($new_eps3))){array_push($errors, "EPS3 is required");}
    if(empty(trim($new_eps4))){array_push($errors, "EPS4 is required");}
    // if(empty(trim($new_dps))){array_push($errors, "DPS is required");}
    if(empty(trim($new_nav))){array_push($errors, "NAV is required");}  
    
   

if (count($errors) == 0){
    
    $epsttmnew = (int)$new_eps1 + (int)$new_eps2 + (int)$new_eps3 + (int)$new_eps4;
    $q = (((int)$new_eps4-(int)$new_eps3)/(int)$new_eps3)*100;
    $qoq = round($q, 2);
    $output = ((int)$new_mps / (int)$epsttmnew);
    $pe = round($output, 2);
    $query = "UPDATE sdetails SET 
    cname='$new_cname',eps1='$new_eps1',eps2='$new_eps2',eps3='$new_eps3',eps4='$new_eps4',eps='$epsttmnew',pe='$pe',yoy='$new_quarter',nav='$new_nav',mps='$new_mps',dps='$new_dps',dtypec='$new_dividendc',dtypes='$new_dividends',
    d1='$new_d1',d2='$new_d2',d3='$new_d3',d4='$new_d4',dfinal='$new_d5',dfyear='$new_fyear',industry='$new_industry',is_deleted='$delete',mdate=NOW()
    WHERE cname='$new_cname'";

    $results = mysqli_query($db, $query);
    
    if(($results) == 1){
        array_push($success, "Record Updated Successfully!");
    }
   
}

}
?>  