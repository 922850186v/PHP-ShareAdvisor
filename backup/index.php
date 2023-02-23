<html>
    <head>
        <title>Share Details Feed</title>

    <link rel="stylesheet" href="css\style.css" />   
    </head> 
    
    <body>
        <h2>Index Form</h2>
    
<div id="table" name="table">
    <form id ="input" method="post" action="" >
        <table name ="form" action="">
        <tr class='rows'>
            <td class="attributes">Share Code</td>    
            <td >
                <input type="text" name="scode" class="input-fields" required='require'>
            </td>
        </tr> 
        <tr class='rows'>
            <td class="attributes">Company Name</td>    
            <td >
                <input type="text" name="cname" class="input-fields" required='require'>
            </td>
        </tr> 
        <tr>
            <td class="attributes">Earnings Per Share</td>
            <td>
            <input type="number" name="eps" step=0.1 class="input-fields" required='require'> 
            </td>
        </tr>
        <tr>
            <td class="attributes">EPS Increased</td>
            <td>
            <select name="epsincrease" id="select" class="input-fields" required='require'>
                <option>SELECT</option>
                <option>Yes</option>
                <option>No</option> 
                </select>
            </td>
        </tr>
        <tr class='rows'>
            <td class="attributes">Net Asset Value</td>
            <td >
            <input type="number" name="nav" step=0.1 class="input-fields" required='require'>
            </td>
        </tr>
        <tr class='rows'> 
            <td class="attributes">Market Value</td>
            <td class="input-fields">
            <input type="number" name="mps" step=0.1 class="input-fields" required='require'>
            </td>
        </tr>
        <tr class="rows">
            <td class="attributes">Dividend Per Share</td>
            <td class="input-fields">
            <input type="number" name="dps" step=0.1 class="input-fields" required='require'>
            </td>
        </tr>
        <tr class='rows'>
            <td class="attributes">Industry</td>
            <td>
            <select name="industry" id="select" class="input-fields" required='require'>
                <option>SELECT</option>
                <option>Consumer Goods</option>
                <option>Capital Goods</option>
                <option>Food & Beverage</option>
                <option>Material</option>
                <option>Finance</option>
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
            &nbsp
        </tr>
        
        </div>
        
            <div name="submit" >
            <table>
            <tr>
            <input type="submit" id="submit" name="submit" method="post" value="Submit">
            </tr>
            </table>
            </div>
        
    
    &nbsp
    <div name="result" id="result">

 
<?php
    
    //connect to db
$server = "localhost" ;
$username = "root" ;
$password = "" ; 
$dbname = "maindb" ;


$conn = mysqli_connect($server, $username, $password, $dbname) or die("unable to connect");
// define variables and set to empty values
    error_reporting(0);
    $_scode = $_POST['scode'];
    $_cname = $_POST['cname'];
    $_eps = $_POST['eps'];
    $_epsincrease = $_POST['epsincrease'];
    $_nav = $_POST['nav'];
    $_mps = $_POST['mps'];
    $_dps = $_POST['dps'];
    $_industry = $_POST['industry'];

    $query = "insert into sdetails(scode,cname,eps,epsincrease,nav,mps,dps,industry) 
    values ('$_scode', '$_cname', '$_eps', '$_epsincrease', '$_nav', '$_mps', '$_dps', '$_industry')";

    $result = mysqli_query($conn, $query);
    if($result){
        echo "Record Added Successfully!";
    }
    else{
        echo "Please fill the empty fields!";
    }


?>

   </div>
    </table>
    &nbsp
    </form>
    <div id="industry" name="itable">
    <form id ="input" method="post" action="" >
        <table name ="form" action="">
        <tr class='rows'>
            <td class="attributes">Industry</td>    
            <td >
                <input type="text" name="iindustry" class="input-fields" required='require'>
            </td>
        </tr> 
        <tr class='rows'>
            <td class="attributes">PE Ratio</td>    
            <td >
                <input type="text" name="per" class="input-fields" required='require'>
            </td>
        </tr> 
        <tr>
            <td class="attributes">Industry PBV</td>
            <td>
            <input type="text" name="ipbv"  class="input-fields" required='require'> 
            </td>
        </tr>
</table>
</form>
</div>
<div name="submit" >
            <table>
            <tr>
            <input type="submit" id="submit" name="submit" method="post" value="Submit">
            </tr>
            </table>
            </div>

            <?php
            //connect to db
            $server = "localhost" ;
            $username = "root" ;
            $password = "" ; 
            $dbname = "maindb" ;


            $conn = mysqli_connect($server, $username, $password, $dbname) or die("unable to connect");
                        
            $iindustry = "";
            $per = "";
            $ipbv = "";

            $iindustry = $_POST['industry'];
            $per = $_POST['per'];
            $ipbv = $_POST['ipbv'];
        
            $query = "INSERT INTO idetails(iindustry,per,ipbv) values ('$iindustry', '$per', '$ipbv')";
        
            $result = mysqli_query($conn, $query);
            if($result){
                echo "Record Added Successfully!";
            }
            else{
                echo "Please fill the empty fields!";
            }
            
            ?>
    </body>
</html>