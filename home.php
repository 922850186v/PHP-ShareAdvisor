<?php 
  session_start(); 

  if (!isset($_SESSION['ID']) && !isset($_SESSION['email'])) {
  	$_SESSION['error'] = "You must log in first";
  	header('location: login.php');
  } 
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['ID']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Share Purchasing Advisor</title>
	
</head>
<body id="body">
<div class="page-header">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['ID'])) : ?>
        
    	<p>Hello, <a href="\useredit.php?id={$_SESSION['ID']}\" style="text-decoration: none;color: black;"><strong><?php echo $_SESSION['username']; ?> !</a></strong></p>
        <!-- <p>User ID : <strong><?php echo $_SESSION['ID']; ?></strong></p> -->
    	<div class ="logout"><strong><a href="home.php?logout='1'" style="color: firebrick; text-decoration: none; font-size: 14pt;" >Logout!</a></strong> </p></div>
    <?php endif ?>
</div>
<div id="data">
<div class="home-header">
	<h2>Share Purchasing Advisor</h2>
</div>

<?php 
    error_reporting(0);
    // $_cname = "";
    // $_cname = $_POST['cname'];
    $conn = mysqli_connect('localhost','root','', 'maindb') or die("unable to connect");
    $query = "SELECT scode,cname from sdetails WHERE is_deleted = 'No'";
    $resultset = mysqli_query($conn, $query);
?>

        <div class="container" id="container">
         <form method="post" action="home.php" class="home-form">
                <div class="user-details">
                   <div class="input-box">
                       
                        <span class="details" id="details"name="scode">Select the Company Name :</span>
           
                       <select name="cname" id="select">
                           <option >---Select a Company From the List Below---</option>
                           <?php 
                            while($rows = mysqli_fetch_assoc($resultset))
                            {
                                $_cname = $rows['cname'];
                                $scode = $rows['scode'];
                                echo "<option value ='$_cname'>$_cname ($scode)</option>";
                            }
                           ?>
                           </select>
                    </div>
                
                <?php 
                $_cname="";
                $_cname = $_POST['cname'];             
                
                $conn = mysqli_connect('localhost','root','', 'maindb') or die("unable to connect");
                ?>    
                <?php $query = "SELECT * from sdetails where cname='$_cname' "; ?> 
                </div>
                
                    <input type="submit" method="post" class="button" id="home-submit" value= "Show Company Details">
                
            <table id="output-home" name="output" class="output-home">
            <tr>
                    <td class="tags">Voting Share Code :</td>
                    <td class="tags-output"><?php 
                                     
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        echo "&nbsp;";
                        echo $value[('scode') ];
                    }
                                         
                    ?></td>
                </tr>
                <tr>
                    <td class="tags">Company Name :</td>
                    <td class="tags-output"><?php 
                                        
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        echo "&nbsp;";
                        echo $value[('cname') ];
                    }
                                         
                    ?></td>
                </tr>
                <br>
            <tr>
                    <td class="tags">Industry :</td>
                    <td class="tags-output"><?php 
                                        
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        $output0 = $value[('industry') ];
                        echo "&nbsp;";
                        echo $output0;
                    }
                                         
                    ?></td>
                </tr>
              
                <tr>
                    <td class="tags">
                        Market Price 
                        <?php 
                        $result = mysqli_query($conn, $query);
                        while($value = mysqli_fetch_array($result)){
                            $output6 = $value['mdate'] ;
                            echo "As @ " . $output6 ;
                        }
                        ?>
                            (MPS) :</td>
                    <td class="tags-output-mps">
                        <?php
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                            $output20 = $value ['mps'];
                            echo "&nbsp;";
                            echo "Rs." .$output20 . "/-";   
                            
                    }
                                    
                    ?></td>
                </tr>
                <tr>
                    <td class="tags">Net Asset Value per Share (NAV) :</td>
                    <td class="tags-output"><?php 
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        $output1 = $value['nav'] ;
                        echo "&nbsp;";
                        echo "Rs.";
                        echo round($output1, 2);
                        echo "/-";
                       
                    }
                                    
                    ?></td>
                </tr>
                <tr>
                    <td class="tags">Price to Book Value (PBV) :</td>
                    <td class="tags-output"><?php 
                   $query_pe = "SELECT * FROM idetails WHERE industry='$output0'";
                   $result_pe = mysqli_query($conn, $query_pe);
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        $output19 = $value['mps'] / $value['nav'];
                        echo "&nbsp;";
                        echo  round($output19, 2);
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        while($value1 = mysqli_fetch_assoc($result_pe)){
                            $output18 = $value1 ['ipbv'];
                            echo "Sector PBV :" .$output18;
                        }
                        
                           
                    // if(($output1) > 1){
                    //     echo "        (Overvalued)";
                    // }
                    // // elseif($output1<0.5){
                    // //     echo "        (Well Undervalued)";
                    // // }
                    // else{
                    //     echo "        (Undervalued)";
                    // }
                    }                                          
                    ?></td>
                </tr>
                
                <tr>
                    <td class="tags">Earnings per Share (EPS)  :</td>
                    <td class="tags-output"><?php 
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        $output16 = $value['eps'] ;
                        echo "&nbsp;";
                        echo "Rs.";
                        echo round($output16, 2);
                        echo "/-&nbsp;";
                        echo "(TTM)";   
                    
                    }
                                          
                    ?></td>
                </tr>
                <tr>
                    <td class="tags">Total Dividends Paid per Share (DPS) :</td>
                    <td class="tags-output"><?php 
                    
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        $output2 = $value['dps'] ;
                        $output8 = $value['dtypec'] ;
                        $output10 = $value['dtypes'] ;
                        if($output10>0 and $output8<0 ){
                            echo "&nbsp;";
                            echo "Rs.";
                            echo  round($output2, 2);
                            echo "/- &nbsp;&nbsp;"; 
                            echo  $output10 . " Dividend";
                            
                                     
                        }elseif($output8>0 and $output10<0){
                            echo "&nbsp;";
                            echo "Rs.";
                            echo  round($output2, 2);
                            echo "/- &nbsp;&nbsp;";
                            echo $output8 . " Dividend";
                        }
                        elseif($output2!=0 and $output8!=0 and $output10 !=0){
                            echo "&nbsp;";
                            echo "Rs.";
                            echo  round($output2, 2);
                            echo "/- &nbsp;&nbsp;";
                            echo $output8 . " + " .$output10 ." Dividend";
                        }
                        else{
                            echo "&nbsp;";
                            echo  "No Dividend Paid";
                            
                        
                        }
                        //echo "Rs.";
                        //echo round($output2, 2);
                        //echo "/-";                       
                    }                                                  
                    ?></td>
                </tr>
                <tr>
                    <td class="tags">Dividend Paid Financial Year :</td>
                    <td class="tags-output"><?php 
                    
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){                        
                        $output9 = $value['dfyear'] ;
                        $output11 = $value['d1'] ;
                        $output12 = $value['d2'] ;
                        $output13 = $value['d3'] ;
                        $output14 = $value['d4'] ;
                        $output15 = $value['dfinal'] ;
                        if($output2!=0 and $output11!=0 and $output12<1 and $output13<1 and $output14<1 and $output15<1){
                            echo "&nbsp;";
                            echo  "$output9";
                            echo " &nbsp;&nbsp;&nbsp;";
                            echo $output11.  " Interim Dividend";
                        }
                        elseif($output2!=0 and $output11<1 and $output12 <1 and $output13<1 and $output14<1 and $output15!=0 ){
                            echo "&nbsp;";
                            echo  "$output9";
                            echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo $output15 ." Dividend";
                        }elseif($output2!=0 and $output11!=0 and $output12 <1 and $output13<1 and $output14<1 and $output15!=0 ){
                            echo "&nbsp;";
                            echo  "$output9";
                            echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo $output11. " & " . $output15 ." Dividends";
                        }
                        elseif($output2!=0 and $output11!=0 and $output12!=0 and $output13<1 and $output14<1 and $output15<1 ){
                            echo "&nbsp;";
                            echo  "$output9";
                            echo " &nbsp;&nbsp;&nbsp;";
                            echo $output11. "," . $output12. " Interim Dividends";
                        }elseif($output2!=0 and $output11!=0 and $output12!=0 and $output13!=0 and $output14<1 and $output15<1){
                            echo "&nbsp;";
                            echo  "$output9";
                            echo " &nbsp;&nbsp;&nbsp;";
                            echo $output11. "," . $output12. "," . $output13 . " Interim Dividends";
                        }elseif($output2!=0 and $output11!=0 and $output12!=0 and $output13!=0 and $output14!=0 and $output15<1){
                            echo "&nbsp;";
                            echo  "$output9";
                            echo " &nbsp;&nbsp;&nbsp;";
                            echo $output11. "," . $output12. "," . $output13 . "," . $output14 . " Interim Dividends";
                        }elseif($output2!=0 and $output11!=0 and $output12!=0 and $output13!=0 and $output14<1 and $output15!=0 ){
                            echo "&nbsp;";
                            echo  "$output9";
                            echo " &nbsp;&nbsp;&nbsp;";
                            echo $output11. "," . $output12. "," . $output13 . " & " . $output15 ." Dividends";
                        }
                        elseif($output2!=0 and $output11!=0 and $output12!=0 and $output13!=0 and $output14!=0 and $output15!=0 ){
                            echo "&nbsp;";
                            echo  "$output9";
                            echo " &nbsp;&nbsp;&nbsp;";
                            echo $output11. "," . $output12. "," . $output13 . "," . $output14 . " & " . $output15 ." Dividends";
                        }
                        else{
                            echo "&nbsp;";
                            echo "N/A";
                        }    
                    }                     
                        //echo "Rs.";
                        //echo round($output2, 2);
                        //echo "/-";                                        
                    ?></td>
                </tr>
                <tr>
                    <td class="tags">Dividend Yield (%) : </td>
                    <td class="tags-output">
                    <?php                                        
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        $output4 = $value['dps'] / $value['mps'] *100 ;
                        if($value['dps']!=0){
                            echo "&nbsp;";
                            echo  round($output4, 2);
                            echo "%";
                            
                        }else{
                            echo "&nbsp;";
                            echo "N/A";
                        }
                        
                        
                    }                                            
                    ?></td>
                </tr><tr>
                    <td class="tags">Dividend Payout (%) : </td>
                    <td class="tags-output"><?php 
                                        
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        $output5 = $value['dps'] / $value['eps'] *100 ;
                        if($output5!=0){
                            echo "&nbsp;";
                            echo  round($output5, 2);
                            echo "%";
                        }else{
                            echo "&nbsp;";
                            echo "N/A";
                        
                        }
                    }
                    ?></td>
                </tr>
                <tr>
                    <td class="tags">Y-o-Y Profit <?php 
                                        
                                        $result = mysqli_query($conn, $query);
                                        while($value = mysqli_fetch_array($result)){
                                            $output21 = $value['yoy'];
                                            if($output21>0){
                                                echo "Growth";
                                            }else{
                                                echo "Declined";                                            
                                            }
                                        }
                                        ?> (%) : </td>
                    <td class="tags-output"><?php 
                                        
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        $output21 = $value['yoy'];
                        if($output21>0){
                            echo "&nbsp;+";
                            echo  round($output21, 2);
                            echo "%";
                        }elseif($output21<0){
                            echo "&nbsp;";
                            echo  round($output21, 2);
                            echo "%";
                        }else{
                            echo "&nbsp;";
                            echo "N/A";
                        
                        }
                    }
                    ?></td>
                </tr>     
                <tr>
                    <td class="tags">Q-o-Q Profit <?php 
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        $output22 = $value['eps3'];
                        $output23 = $value['eps4'];
                        $qoqd = ($output23 - $output22);
                        if($qoqd>0){
                            echo "Growth";
                        }else{
                            echo "Decline";
                        }
                    }
                        
                        ?> (%) : </td>
                    <td class="tags-output"><?php 
                                        
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        $output22 = $value['eps3'];
                        $output23 = $value['eps4'];                            
                                                      
                            if($output22 !=0 and $output23>$output22 ){
                                $qoq = (($output23-$output22)/$output22)*100;
                                echo "&nbsp;+";
                                echo  round($qoq, 2);
                                echo "%";
                            }elseif($output23<$output22){
                                $qoq = (($output23-$output22)/$output22)*100;
                                echo "&nbsp;";
                                echo  round($qoq, 2);
                                echo "%";
                            }else{

                                echo "&nbsp;";
                                echo "N/A";
                                
                            }
                            
                        
                    }
                    ?></td>
                </tr>          
                <tr>
                    <td class="tags">Company Current PE ratio (Times) :</td>
                    <td class="tags-output">
                    <?php       
                    $query_pe = "SELECT * FROM idetails WHERE industry='$output0'";
                    $result_pe = mysqli_query($conn, $query_pe);                                  
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        $output3 = $value['pe'];
                        echo "&nbsp;";
                        echo  round($output3, 2);
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        while($value2 = mysqli_fetch_assoc($result_pe)){
                            $output17 = $value2 ['ipe'];
                            
                            echo "Sector PE :" . $output17;
                        }

                        // if($output3<$output18){
                        //     echo "Underdemanding in Industry";
                        // }else{
                        //     echo "Overdemanding in Industry";
                        // }
                    }                                            
                    ?></td>
                </tr>
                
                
                <tr>
                    <td class="tags">
                        PE Ratio @
                        <?php
                        $result = mysqli_query($conn, $query);
                        while($value = mysqli_fetch_array($result)){
                            if(($output3 >0)){
                                $amount1 = $output17-0.5;
                                echo round($amount1, 0);
                                
                            }
                        }
                    ?>, Target Price :
                    </td>
                    <td class="tags-output-trend">
                    <?php
                        $result = mysqli_query($conn, $query);
                        while($value = mysqli_fetch_array($result)){
                            $output7 = $amount1 * $value['eps'];
                            echo "&nbsp;";
                            echo "Rs.";
                            echo round($output7, 2);
                            echo "/-";
                            $trend = (($output7 - $value['mps'])/$value['mps']) * 100;
                            if($trend>0){
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo "+";
                                echo round(($trend) , 2);
                                echo "%";
                            }
                            else{
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo round(($trend) , 2);
                                echo "%";
                            }
                            
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="tags">
                        PE Ratio @
                        <?php
                        $result = mysqli_query($conn, $query);
                        while($value = mysqli_fetch_array($result)){
                            if(($output3 >0)){
                                $amount2 = $output17+0.5;
                                echo round($amount2, 0);
                                
                            }
                        }
                    ?>, Target Price :
                    </td>
                    <td class="tags-output-trend">
                    <?php
                        $result = mysqli_query($conn, $query);
                        while($value = mysqli_fetch_array($result)){
                            $output7 = $amount2 * $value['eps'];
                            echo "&nbsp;";
                            echo "Rs.";
                            echo round($output7, 2);
                            echo "/-";
                            $trend = (($output7 - $value['mps'])/$value['mps']) * 100;
                            if($trend>0){
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo "+";
                                echo round(($trend) , 2);
                                echo "%";
                            }
                            else{
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo round(($trend) , 2);
                                echo "%";
                            }
                        }
                        
                        ?>
                        
                    </td>
                    
                </tr>
                <tr id="before-suggestion"></tr>
                <!-- 
                $output0 = "industry"
                $output1 = "NAV"
                $putput2 = "DPS"
                $output3 = "PE"
                $output4 = "DYield"
                $output5 = "DPayout"
                $output6 = "mdate"
                $output7 = "Tgt Price"
                $output8 = "dtypec"
                $output9 = "fyear"
                $putput10 = "dtypes"
                $output11 = "d1"
                $output12 = "d2"
                $output13 = "d3"
                $output14 = "d4"
                $output15 = "dfinal"
                $output16 = "EPS"
                $output17 = "ipe"
                $output18 = "ipbv"
                $output19 = "PBV" -->
                
                
            </table>  
            <div class="suggestion-table">
            <table >
                <tr class="suggestion-head">
                    <strong>Fundamental Buying Suggestions</strong> 
                </tr>
                <br>
                    <tr class="suggestion">
                    <?php
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        if( ($output19 < $output18) ) {
                            echo " 1).Undervalued Share Compared to the Sector.";
                        }else{
                            echo " 1).Overvalued Share Compared to the Sector.";
                        }
                    }
                    ?> <br>
                    <?php
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        if($output3<$output17 and ($value['yoy']>0) and ($output19 < $output18) ){
                            echo "2).UnderDemanding Share in the Sector (High Potential to Go Up).";
                        }
                        elseif($output3<$output17 and ($value['yoy']>0)){
                            echo "2).UnderDemanding Share in the Sector.";
                        }
                        elseif(($output3<$output17) and ($value['yoy']<1) ){
                            echo "2).UnderDemanding Share in the Sector (Low Potential to Go Up).";
                        }
                        elseif(($output3>$output17)) {

                            echo "2).OverDemanding Share in the Sector (Low Potential to Go Up).";
                        }
                        
                    }
                    ?>
                    <br>
                        <?php 
                        
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result))
                    {
                        if (($output2 > 0) and (($value['yoy']>0) ) and ($output5>40) and ($output4>8)){
                            echo "3).High Dividend Paying share.";
                            if($output9 < date("Y")){
                                echo "  (FY" . date("Y") . " Dividend is Pending)";
                            }
                        }
                        elseif (($output2 > 0) and ($output5!=0)){
                            echo "3).Dividend Paying Share." ;
                            if($output9 < date("Y")){
                                echo "  (FY" . date("Y") . " Dividend is Pending)";
                            }
                        }
                        elseif($output2<1){
                            echo "3).Not a Dividend Paying Share.";
                        }
                    }
                    ?>
                    <br>
                <?php
                $result = mysqli_query($conn, $query);
                while($value = mysqli_fetch_array($result)){
                    if($value['yoy']>0){
                        echo "4).Last Quater Profit Increased by " .$output21."% ". "Compared to Previouse Year.";
                    }
                    elseif($output3<0){
                        echo "4).Loss Making Company.";
                    }
                    elseif($value['yoy']<1){
                        echo "4).Last Quater Profit Decreased by " .$output21."% ". "Compared to Previouse Year.";
                    }
                }         
                    ?>
                    
                </tr>
                </table>
                </div>
                
                
        </form>
</div>


        <!-- <div id="mdate">
                    * Last Modified Date :
                   
                    <?php                                        
                    $result = mysqli_query($conn, $query);
                    while($value = mysqli_fetch_array($result)){
                        $output6 = $value['mdate'] ;
                        echo $output6;                   
                    }                                            
                    ?>
                </div> -->
</div>
<button class = "print" onclick="printPage()">Print this Page</button>
<script>
    
    function printPage(){
    setInterval(printPage, 1000);
    let body = document.getElementById('body').innerHTML;
    let data = document.getElementById('data').innerHTML;
    document.getElementById('body').innerHTML = data;
    window.print();
    
    }
//window.open() method
// let navigate = document.getElementById("select");

// navigate.addEventListener("change" , function(){
//     window.open(navigate.value, "_self");
// });
</script>
<div id="footer">
<p id="copy">
Copyright &copy; <?php echo date("Y");?>, Vishva Isuranga
</p>
</div>
</body>
</html>