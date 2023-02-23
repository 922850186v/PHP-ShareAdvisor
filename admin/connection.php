<?php
error_reporting(0);
    //connect to db
$server = "localhost" ;
$username = "root" ;
$password = "" ; 
$dbname = "maindb" ;

$_scode = "";
$_cname = "";
$_eps1 = "";
$_nav = "";
$_mps = "";
$_dps = "";
$_industry = "";
$_dividends = "";
$new_d1 = "";
$new_d2 = "";
$new_d3 = "";
$new_d4 = "";
$new_d5 = "";
$_fyear = "";

$errors = array(); 
$success = array();
$db = mysqli_connect($server, $username, $password, $dbname) or die("unable to connect");
// define variables and set to empty values
    //Index page values submit
    if (isset($_POST['add_submit'])) {
        // receive all input values from the form
        $_scode = mysqli_real_escape_string($db,$_POST['scode']);
        $_cname = mysqli_real_escape_string($db,$_POST['cname']);
        $_eps1 = mysqli_real_escape_string($db,$_POST['eps1']);
        $_eps2 = mysqli_real_escape_string($db,$_POST['eps2']);
        $_eps3 = mysqli_real_escape_string($db,$_POST['eps3']);
        $_eps4 = mysqli_real_escape_string($db,$_POST['eps4']);
        $qoq = mysqli_real_escape_string($db,$_POST['quarter']);
        $_nav = mysqli_real_escape_string($db,$_POST['nav']);
        $_mps = mysqli_real_escape_string($db,$_POST['mps']);
        $_dps = mysqli_real_escape_string($db,$_POST['dps']);
        $_dividendc = mysqli_real_escape_string($db,$_POST['dividendc']);
        $_dividends = mysqli_real_escape_string($db,$_POST['dividends']);
        $new_d1 = mysqli_real_escape_string($db,$_POST['d1']);
        $new_d2 = mysqli_real_escape_string($db,$_POST['d2']);
        $new_d3 = mysqli_real_escape_string($db,$_POST['d3']);
        $new_d4 = mysqli_real_escape_string($db,$_POST['d4']);
        $new_d5 = mysqli_real_escape_string($db,$_POST['d5']);
        $_fyear = mysqli_real_escape_string($db,$_POST['dfyear']);
        $_industry = mysqli_real_escape_string($db,$_POST['industry']);
        
      
        
        // $req_fields = array('scode','cname','eps','epsincrease','nav','mps','dps','industry');

            //checking empty fields
    if(empty(trim($_scode))){array_push($errors, "Share code is required");}
    if(empty(trim($_cname))){array_push($errors, "Company Name is required");}
    if(empty(trim($_eps1))){array_push($errors, "EPS is required");}
    if(empty(trim($_nav))){array_push($errors, "NAV is required");}
    // if(empty(trim($_dps))){array_push($errors, "DPS is required");}

    
  $share_check_query = "SELECT * FROM sdetails WHERE scode='$_scode' LIMIT 1";
  $result = mysqli_query($db, $share_check_query);
  $share = mysqli_fetch_assoc($result);
  if ($share) { // if share exists
    if ($share['scode'] === $_scode) {
      array_push($errors, "Share Code is already exists");
    }
  }
  //inserting data to the table
  if (count($errors) == 0) {
    $epsttm = ($_eps1 + $_eps2 + $_eps3 + $_eps4);
    $output = ($_mps / $epsttm);
    $pe = round($output, 2);
    $query = "insert into sdetails(scode,cname,eps1,eps2,eps3,eps4,eps,pe,yoy,nav,mps,dps,dtypec,dtypes,d1,d2,d3,d4,dfinal,dfyear,industry,is_deleted) 
    values ('{$_scode}', '{$_cname}', '{$_eps1}', '{$_eps2}', '{$_eps3}', '{$_eps4}','{$epsttm}','{$pe}','{$qoq}', '{$_nav}', '{$_mps}', '{$_dps}',
     '{$_dividendc}', '{$_dividends}','{$new_d1}','{$new_d2}','{$new_d3}','{$new_d4}','{$new_d5}','{$_fyear}','{$_industry}','No')";

    mysqli_query($db, $query);
        array_push($success,"Share Added Successfully!");  
}
// else{
//   array_push($errors, 'Data Submission Error');
// }
}
?>