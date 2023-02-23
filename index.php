<?php include('session.php') ?>
<?php include('admin\connection.php') ?> 

<html>
    <head>
        <title>Share Adding Form</title>

    <link rel="stylesheet" href="css\style.css" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    </head> 
    <script>
        var date = new Date();
        var Year = date.getFullYear();
        var datePattern = Year;
        document.getElementByID("fyear").value = datePattern;
        document.write(datePattern);
    </script>
    <body>
        <div class="admin-home-content">
          	<!-- notification message -->
  	<?php 
          error_reporting(0);
      if (isset($_SESSION['success'])) : ?>
      <div class="errmsg success" >
      	<h3>
          <?php 
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
	<h1>Share Adding Form</h1>
    </div>

    <div class="head-links">
<a href="admin-home.php">Admin Home</a>
<a href="index.php">Share Add</a>
<a href="edit.php">Share Edit</a>
<a href="industry.php">Industry Edit</a>
</div>


<div id="table" name="table">
    <form id ="input" method="post" action="" >
   <div>
   <table name ="form" action="" class="edit">
        <tr class='rows'>
            <td class="attributes">Share Code :</td>    
            <td >
                <input type="text" name="scode" class="input-edit" >
            </td>
        </tr> 
        <tr class='rows'>
            <td class="attributes">Company Name :</td>    
            <td >
                <input type="text" name="cname" class="input-edit" >
            </td>
        </tr> 
        <tr>
            <td class="attributes">EPS Q1:</td>
            <td>
            <input type="number" name="eps1" step=0.01 class="input-edit" > 
            </td>
        </tr>
        <tr>
            <td class="attributes">EPS Q2:</td>
            <td>
            <input type="number" name="eps2" step=0.01 class="input-edit" > 
            </td>
        </tr>
        <tr>
            <td class="attributes">EPS Q3:</td>
            <td>
            <input type="number" name="eps3" step=0.01 class="input-edit" > 
            </td>
        </tr>
        <tr>
            <td class="attributes">EPS Q4:</td>
            <td>
            <input type="number" name="eps4" step=0.01 class="input-edit" > 
            </td>
        </tr>
        
        <tr>
            <td class="attributes">Y-o-Y Performance :</td>
            <td>
            <input type="number" name="quarter" step=0.01 class="input-edit" > 
            </td>
        </tr>
        <tr class='rows'>
            <td class="attributes">Net Asset Value :</td>
            <td >
            <input type="number" name="nav" step=0.01 class="input-edit" >
            </td>
        </tr>
        <tr class='rows'> 
            <td class="attributes">Market Value :</td>
            <td >
            <input type="number" name="mps" step=0.01 class="input-edit" >
            </td>
        </tr>
        <tr class="rows">
            <td class="attributes">Dividend Per Share :</td>
            <td >
            <input type="number" name="dps" step=0.01 class="input-edit" >
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
            <input type="number" name="dfyear" id="dfyear" value="2022" min="2020" max="2025" class="input-edit" >
            </td>
        </tr>
        
        <tr class='rows'>
            <td class="attributes">Industry :</td>
            <td>
            <?php 

    $db = mysqli_connect('localhost','root','', 'maindb') or die("unable to connect");
    $query = "SELECT industry from idetails ";
    $resultset = mysqli_query($db, $query);
?>
            <select name="industry" id="industry-select" class="input-edit" placeholder="Select the Industry" >
                <option>SELECT</option>
                <?php 
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
        
        </div>

    

            <div name="submit" >
            <table>
            <tr>
            <input type="submit" id="submit" name="add_submit" method="post" value="Add Share">
            </tr>
            <tr>
            <input type="reset" id="submit" name="reset" value="Reset">
            </tr>
            </table>
   </div>
        
            </div>
      &nbsp
    
      <div name="result" id="result">
      <?php include('admin\errors.php') ?> 
    </div>

    </body>
</html>