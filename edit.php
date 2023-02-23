<?php include('session.php') ?>
<?php include('admin\edit-con.php') ?> 

<html>
    <head>
        <title>Share Editing Form</title>

    <link rel="stylesheet" href="css\style.css" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="js/bootstrap.min.js"></script>
    
    </head> 
    
    <body>
    <div class="admin-home-content">
          	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="errrmsg success" >
      	<h3>
          <?php 
          error_reporting();
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
     
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['admin'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['admin']; ?></strong></p>
    	<p><strong><a href="admin-home.php?logout='1'" style="color: blue;">Logout</a></strong> </p>
    <?php endif ?>
    </div>

    </div>
    <div class="admin-header">
	<h1>Share Details Edit Form</h1>
    </div>
    <div class="head-links">
<a href="admin-home.php">Admin Home</a>
<a href="index.php">Share Add</a>
<a href="edit.php">Share Edit</a>
<a href="industry.php">Industry Edit</a>
</div>

<?php 

    $query = "SELECT scode,cname from sdetails ";
    $resultset = mysqli_query($db, $query);
?>

  	<!-- notification message -->
  



<div id="edit-table" name="table">
<form id ="input" method="submit" action="" >
    <table id="cname-select">
        <tr>
            <td>
            <div class="edit-details">
                               <!-- Selecting the company name -->
                    Select the Company Name :
                    <br>
                       <select name="cname" id="edit_select" >
                           <option >--Select From the List Below--</option>
                           <?php 
                            while($rows = $resultset->fetch_assoc())
                            {
                                $_cname = $rows['cname'];
                                $scode = $rows['scode'];
                                echo "<option value ='$_cname'>$_cname ($scode)</option>";
                            }
                           ?>
                        </select>
            </div>
            </td>
        </tr>
        
        <?php error_reporting(0);
                $_cname = mysqli_real_escape_string($db, $_GET['cname']);          
                $db = mysqli_connect('localhost','root','', 'maindb') or die("unable to connect");
                ?>
        
        <tr>
        
        </tr>
        </table>
        <input type="submit"  id="submit" name="get_details" method="get" value= "Show Details">
        </form>
    </div>
        
  
 
<div id="edit-content" name="table">
<?php $query = "SELECT * from sdetails where cname  ='$_cname' "; ?>  

<form action="" method="post" >
<table name="eps" id="eps">
        <tr>
            <td class="tags">EPS1 :</td>
            <td class="output">
             <input type="number" step=0.01 name="new_eps1" id="new_eps" class="new_eps" 
                 value ="<?php 
                                  
                                  $result = mysqli_query($db, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('eps1')];
                                  }
                                   
                                  ?>"
                 >
             </td>
        </tr>
        <tr>
            <td class="tags">EPS2 :</td>
            <td class="output">
             <input type="number" step=0.01 name="new_eps2" id="new_eps" class="new_eps" 
                 value ="<?php 
                                  
                                  $result = mysqli_query($db, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('eps2')];
                                  }
                                   
                                  ?>"
                 >
             </td>
        </tr>
        <tr>
            <td class="tags">EPS3 :</td>
            <td class="output">
             <input type="number" step=0.01 name="new_eps3" id="new_eps" class="new_eps" 
                 value ="<?php 
                                  
                                  $result = mysqli_query($db, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('eps3')];
                                  }
                                   
                                  ?>"
                 >
             </td>
        </tr>
        <tr>
            <td class="tags">EPS4 :</td>
            <td class="output">
             <input type="number" step=0.01 name="new_eps4" id="new_eps" class="new_eps" 
                 value ="<?php 
                                  
                                  $result = mysqli_query($db, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('eps4')];
                                  }
                                   
                                  ?>"
                 >
             </td>

             <td>
             <input type="button" value=" Add quarter " id="addeps" name="add">
             </td>
        </tr>
        </table>
        <table name ="form" action="" class="edit">
        <tr >
            <td class="tags">Share Code :</td>    
            <td name="new_scode">
                <label for="new_scode" name="new_scode">
            <?php 
                                  
                                  $result = mysqli_query($db, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('scode')];
                                  }
                                   
                                  ?>
                 
                        
            </td>
        </tr> 
         
        <tr >
            <td class="tags">Company Name :</td>    
            <td name="new_cname">
            <input type="text" name="new_cname" id="new_cname" class="input-edit" 
                 value ="<?php 
                                  
                                  $result = mysqli_query($db, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('cname')];
                                  }
                                   
                                  ?>"
                 >
             </td>
        </tr> 
        
        
        <tr>
            <td class="tags">Y-o-Y Performance :</td>
            <td class="output">
             <input type="number" step=0.01 name="new_quarter" id="new_quarter" class="input-edit" 
                 value ="<?php 
                                  
                                  $result = mysqli_query($db, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('yoy')];
                                  }
                                   
                                  ?>"
                 >
             </td>
        </tr>
        <tr>
            <td class="tags">Net Asset Value :</td>
            <td class="output">
                 <input type="number" step=0.01 name="new_nav" class="input-edit" 
                 value ="<?php 
                                  
                                  $result = mysqli_query($db, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('nav')];
                                  }
                                   
                                  ?>"
                 >
             </td>
        </tr>
        <tr > 
            <td class="tags">Market Value :</td>
            <td class="output">
             <input type="number" step=0.01 name="new_mps" class="input-edit" 
             value ="<?php 
                                  
                                  $result = mysqli_query($db, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('mps')];
                                  }
                                   
                                  ?>"
                 >
             </td>
        </tr>
        
        <tr >
            <td class="tags">Dividend Per Share :</td>
            <td class="output">
             <input type="number" step=0.01 name="new_dps" class="input-edit" 
             value ="<?php 
                                  
                                  $result = mysqli_query($db, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('dps')];
                                  }
                                   
                                  ?>"
                 >
             </td>
        </tr>
        <tr class="rows">
            <td class="attributes">Dividend Category :</td>
            <td >
            <div class="category">
             <label for="dot-1" >
             Cash Dividend  -
                 <input type="checkbox" name="dividendc" class="dividend" id="check" value="Cash">  <br>
             </label>
            <label for="dot-2" >
            Scrip Dividend  -
            <input type="checkbox" name="dividends" class="dividend" id="check" value="Scrip">  <br>
        </label>
            </td>
        </tr>
        <tr class="rows">
            <td class="attributes">Dividend Type :</td>
            <td >
            <div class="category">
             <label for="dot-1" >
             1st Interim  -
                 <input type="checkbox" name="d1" class="dividend" id="check" value="1st">  <br>
             </label>
            <label for="dot-2" >
            2nd Interim  -
            <input type="checkbox" name="d2" class="dividend" id="check" value="2nd">  <br>
        </label>
        <label for="dot-3" >
             3rd Interim  -
                 <input type="checkbox" name="d3" class="dividend" id="check" value="3rd">  <br>
             </label>
            <label for="dot-4" >
            4th Interim  -
            <input type="checkbox" name="d4" class="dividend" id="check" value="4th">  <br>
        </label>
        <label for="dot-5" >
            Final  -
            <input type="checkbox" name="d5" class="dividend" id="check" value="Final">  <br>
        </label>
            </td>
        </tr>
        <tr class="rows">
            <td class="attributes">Financial Year :</td>
            <td >
            <input type="number" name="dfyear" id="dfyear" min="2020" max="2050" class="input-edit" value="<?php 
                                  
                                  $result = mysqli_query($db, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('dfyear')];
                                  }
                                   
                                  ?>"  >
            </td>
        </tr>
        <tr >
            <td class="tags">Industry :</td>
            <td class="output">
                 <select name="new_industry" id="industry-select" class="input-edit" >
                <option><?php 
                                  
                                  $result = mysqli_query($db, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('industry')];
                                  }
                                   
                                  ?></option>
                <?php $query_industry = "SELECT industry from idetails  ";
                      $resultset = mysqli_query($db, $query_industry);
                            while($rows = mysqli_fetch_assoc($resultset))
                            {
                                $_industry = $rows['industry'];
                                echo "<option value ='$_industry'>$_industry</option>";
                            }
                           ?>
            
            </select>
            </td>
            &nbsp
        </tr>
        <tr>
        <td class="attributes">Deleted Record :</td>
        <td class="output">
                 <select name="delete_record" id="delete_record" class="input-edit" >
                 <option><?php 
                                  
                                  $result = mysqli_query($db, $query);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('is_deleted')];
                                  }
                                   
                                  ?></option>
                <option>Yes</option>
                <option>No</option>
            </select>
            </td>
        </tr>
        </div>
        
            <div name="submit" >
            <table>
            <tr>
            <input type="submit" id="submit" name="edit_submit" method="post" value="Submit Edit">
            </tr>
            <!-- <tr>
            <input type="submit" id="delete" name="Delete_Record" value="Delete Record">
            </tr> -->
            </table>
            </div>
            
      
    
    &nbsp
    <div name="result" id="result">
      <?php include('admin\errors.php') ?> 
    </div>


        </form>
        <script Type="text/javascript">
        let epsAdd = document.getElementById("addeps");
        let newEps = document.getElementById("new_eps");

        epsAdd.addEventListener("click" , addEps);

        function addEps(){
            let addInput = document.createElement('input');
            addInput.setAttribute("type" , "number");

            newEps.appendChild(addInput);
        }
    </script>

    </body>
</html>