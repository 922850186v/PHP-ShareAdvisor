<?php 
    session_start();
    error_reporting(0);
    $_cname = $_POST['cname'];
    $conn = mysqli_connect('localhost','root','', 'maindb') or die("unable to connect");
    $query = "SELECT cname,scode from sdetails ";
    $resultset = mysqli_query($conn, $query);
?>
<html>
    <head>
        <title>Share Purchasing Advisor</title>
        <link rel="stylesheet" href="css\style.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div name="welcom" id="welcome">
            welcome <?php echo $_SESSION['username']; ?>
        </div>

             <div class="container" >
            <div class="title">Share Purchasing Advisor</div>
            <form method="post" action="home.php">
                <div class="user-details">
                   <div class="input-box">
                       
                        <span class="details" id="details"name="scode">Select the Company Name :</span>
                        
                       
                       
                       <select name="cname" id="select">
                           <option >--Select--</option>
                           <?php 
                            while($rows = $resultset->fetch_assoc())
                            {
                                $_cname = $rows['cname'];
                                echo "<option value ='$_cname'>$_cname</option>";
                            }
                           ?>
                           </select>
                    </div>
                
                <?php error_reporting(0);
                $_scode="";
                $_cname = $_POST['cname'];
                $_scode = $_POST['scode'];                
                
                $conn = mysqli_connect('localhost','root','', 'maindb') or die("unable to connect");
                ?>    


                <?php $query = "SELECT * from sdetails where cname='$_cname' "; ?>
                   
                </div>
                <div class="button">
                    <input type="submit" method="post" value= "Show Details">
                </div>
            <table id="output-home" name="output" class="output-home">
            <tr>
                    <td class="tags">Voting Share Code :</td>
                    <td class="tags-output"><?php 
                    
                    
                    $result = mysqli_query($conn, $query);

                    while($value = mysqli_fetch_array($result)){
                        echo $value[('scode') ];
                    }
                                         
                    ?></td>
                </tr>
                <tr>
                    <td class="tags">Company Name :</td>
                    <td class="tags-output"><?php 
                    
                    
                    $result = mysqli_query($conn, $query);

                    while($value = mysqli_fetch_array($result)){
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
                        echo $value[('industry') ];
                    }
                                         
                    ?></td>
                </tr>
                <tr>
                    <td class="tags">Net Asset Value per Share (NAV) :</td>
                    <td class="tags-output"><?php 
                    
                    $result = mysqli_query($conn, $query);

                    while($value = mysqli_fetch_array($result)){
                        $output1 = $value['nav'] ;
                        echo "Rs.";
                        echo round($output1, 2);
                        echo "/-";
                           
                    
                    }
                                          
                    ?></td>
                </tr>
                <tr>
                    <td class="tags">Price to Book Value(PBV) :</td>
                    <td class="tags-output"><?php 
                    
                    $result = mysqli_query($conn, $query);

                    while($value = mysqli_fetch_array($result)){
                        $output1 = $value['mps'] / $value['nav'];
                        echo  round($output1, 2);
                           
                    if(($output1) > 1){
                        echo "        (Overvalued)";
                    }else{
                        echo "        (Undervalued)";
                    }
                    }
                                          
                    ?></td>
                </tr>
                <tr>
                    <td class="tags">Dividends Paid per Share (DPS) :</td>
                    <td class="tags-output"><?php 
                    
                    $result = mysqli_query($conn, $query);

                    while($value = mysqli_fetch_array($result)){
                        $output2 = $value['dps'] ;
                        echo "Rs.";
                        echo round($output2, 2);
                        echo "/-";   
                    
                    }
                                          
                    ?></td>
                </tr>
                <tr>
                    <td class="tags">PE ratio (Times):</td>
                    <td class="tags-output"><?php 
                                        
                    $result = mysqli_query($conn, $query);

                    while($value = mysqli_fetch_array($result)){
                        $output3 = $value['mps'] / $value['eps'];
                        echo  round($output3, 1);
                    }
                                            
                    ?></td>
                </tr><tr>
                    <td class="tags">Dividend Yield (%) : </td>
                    <td class="tags-output"><?php 
                                        
                    $result = mysqli_query($conn, $query);

                    while($value = mysqli_fetch_array($result)){
                        $output4 = $value['dps'] / $value['mps'] *100 ;
                        echo  round($output4, 2);
                        echo "%";
                    }
                                            
                    ?></td>
                </tr><tr>
                    <td class="tags">Dividend Payout (%) : </td>
                    <td class="tags-output"><?php 
                                        
                    $result = mysqli_query($conn, $query);

                    while($value = mysqli_fetch_array($result)){
                        $output5 = $value['dps'] / $value['eps'] *100 ;
                        echo  round($output5, 2);
                        echo "%";
                    }
                        
                    
                    ?></td>
                </tr>
                </tr><tr>
                    <td class="tags">Buying Suggestion : </td>
                    <td class="tags-output"><?php 
                    
                    $result = mysqli_query($conn, $query);

                    while($value = mysqli_fetch_array($result)){
                        if (($output1 < 1) and $value['epsincrease'] ='Yes') {
                            echo "Fundamentally Good Price to Buy!";
                        } elseif (($output5)>50 and ($output4>5)){
                            echo "High Dividend Paying Share!";
                        }else{
                            echo "Not a Good Price to Buy!";
                        }
                       
                    }
                                   
                    ?></td>
                </tr>
            </table>
                
            </form>
        </div>
        <div name="result" id="result"> 
        </div>

        <div class="content">
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
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="home.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>


    <button value="Logout">
        <a href="home.php? logout='1'"></a>
    </button>

    </body>
</html>