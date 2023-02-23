<html>
    <body>
   <head>
   <h2>Editing Panel</h2>
   <link rel="stylesheet" href="css\style.css" />   
   </head>

 <?php 
 error_reporting();
?>

<input type="submit" method="post" id="edit-submit" value= "Submit Edit">

<div class="share-details" name="share-details" >
<form method="post" action="">
         <table>
                  <tr>
             <td class="tags">Share Code :</td>
             <td>
             <select name="scode" id="edit-select">
                        <option >--Select--</option>
                        <?php 
                        $conn = mysqli_connect('localhost','root','', 'maindb') or die("unable to connect");
                        $query = "SELECT scode from sdetails ";
                        $resultset = mysqli_query($conn, $query);
                         while($rows = $resultset->fetch_assoc())
                         {
                             $_scode = $rows['scode'];
                             echo "<option value ='$_scode'>$_scode</option>";
                         }
                        ?>
                        <?php 
            
            $_scode = $_POST['scode'];             
            
            $conn = mysqli_connect('localhost','root','', 'maindb') or die("unable to connect");
            ?>    
            <?php $query = "SELECT * from sdetails where scode='$_scode' "; ?> 
                        </select>
               
             </td>
         </tr>
         <tr>
             <td class="tags">Company Name :</td>
             <td>
             <?php 
                                  
                                  $result = mysqli_query($conn, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('cname')];
                                  }
                                   
                                  ?>
                 
             </td>
         </tr>
         <tr>
             <td class="tags">EPS :</td>
             <td>
             <input type="number" step=0.1 name="new_eps" 
                 placeholder ="<?php 
                                  
                                  $result = mysqli_query($conn, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('eps')];
                                  }
                                   
                                  ?>"
                 >
             </td>
         </tr>
         <tr>
             <td class="tags">EPS Increase :</td>
             <td>
             <input type="number" step=0.1 name="new_epsincrease"
                 placeholder ="<?php 
                                  
                                  $result = mysqli_query($conn, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('epsincrease')];
                                  }
                                   
                                  ?>"
                 >
             </td>
         </tr>
         <tr>
             <td class="tags">Net Asset Value :</td>
             <td>
                 <input type="number" step=0.1 name="new_nav"
                 placeholder ="<?php 
                                  
                                  $result = mysqli_query($conn, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('nav')];
                                  }
                                   
                                  ?>"
                 >
             </td>
         </tr>
         <tr>
             <td class="tags">Market Price :</td>
             <td>
             <input type="number" step=0.1 name="mps"
                 placeholder ="<?php 
                                  
                                  $result = mysqli_query($conn, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('mps')];
                                  }
                                   
                                  ?>"
                 >
             </td>
         </tr>
         <tr>
             <td class="tags">Dividend Per Share :</td>
             <td>
             <input type="number" step=0.1 name="new_dps"
                 placeholder ="<?php 
                                  
                                  $result = mysqli_query($conn, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('dps')];
                                  }
                                   
                                  ?>"
                 >
             </td>
         </tr>
         <tr>
             <td class="tags">Industry :</td>
             <td>
                 <select name="industry" id="edit-select" class="input-edit" required='require'>
                <option><?php 
                                  
                                  $result = mysqli_query($conn, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('industry')];
                                  }
                                   
                                  ?></option>
                <option>Consumer Goods</option>
                <option>Capital Goods</option>
                <option>Consumer Services</option>
                <option>Food Beverage & Tobacco</option>
                <option>Food & Staples Retailing</option>
                <option>Materials</option>
                <option>Diversified Financials</option>
                <option>Banks</option>
                <option>Retailing</option>
                <option>Software</option>
                <option>Telecommunication Services</option>
                <option>Transportation</option>
                <option>Diversified Holdings</option>
                <option>Consumer Durables & Apparel</option>
                <option>Utilities</option>

            </select>
             </td>
         </tr>
         </form> 
         </table>
                                  
         
         
         </div>
         
         
            
        <div name="result" id="result">
         <?php
         
         //connect to db
         $server = "localhost" ;
         $username = "root" ;
         $password = "" ; 
         $dbname = "maindb" ;

         $conn = mysqli_connect($server, $username, $password, $dbname) or die("unable to connect");

         $new_scode = $_POST['new_scode'];
         $new_cname = $_POST['new_cname'];
         $new_eps = $_POST['new_eps'];
         $new_epsincrease = $_POST['new_epsincrease'];
         $new_nav = $_POST['new_nav'];
         $new_mps = $_POST['new_mps'];
         $new_dps = $_POST['new_dps'];
         $new_industry = $_POST['new_industry'];
         
         $query = "insert into test(scode,cname,eps,epsincrease,nav,mps,dps,industry) 
         values ('$new_scode', '$new_cname', '$new_eps', '$new_epsincrease', '$new_nav', '$new_mps', '$new_dps', '$new_industry')'";
     
         $result = mysqli_query($conn, $query);
         if($result){
             echo "Record Editted Successfully!";
         }
         else{
             echo "Please fill the empty fields!";
         }
         
         ?>
         </div>
    </body>
</html>

