<?php include('session.php') ?>
<?php include('admin\industry-con.php') ?>  
<html>
    <head>
        <title>Industry Editing Form</title>

    <link rel="stylesheet" href="css\style.css" />   
    </head> 
    
    <body>
    <div class="admin-home-content">
          	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
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
    <div class="admin-header">
	<h1>Industry Editing Form</h1>
    </div>
<div class="head-links">
<a href="admin-home.php">Admin Home</a>
<a href="index.php">Share Add</a>
<a href="edit.php">Share Edit</a>
<a href="industry.php">Industry Edit</a>
</div>

	
<div id="table" name="table">
    <form id ="input" method="post" action="" >

        <table name ="form" action="" class="edit"> 
        <tr class='rows'>
            <td class="attributes">Industry :</td>
            <td>
            <?php 
    error_reporting(0);
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
         <tr class='rows'>
            <td class="attributes">Industry PBV :</td>    
            <td >
            <input type="number" name="ipbv" step=0.01 class="input-edit" >
            </td>
        </tr>
        <tr class='rows'>
            <td class="attributes">Industry PE :</td>    
            <td >
                <input type="number" name="ipe" step=0.01 class="input-edit" >
            </td>
        </tr>
        </div>
        


            <div name="submit" >
            <table>
            <tr>
            <input type="submit" id="submit" name="industry_add" method="post" value="Submit">
            </tr>
            <tr>
            <input type="reset" id="submit" name="submit" value="Reset">
            </tr>
            </table>
            </div>
        
    &nbsp
    <div name="result" id="result">
    <?php include('admin\errors.php') ?>    
    </div>

    </table>
    </form>
    </body>
</html>