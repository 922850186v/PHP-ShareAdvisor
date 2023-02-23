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
<html>
    <head>
        <title>
            User Edit Form
        </title>

    <link rel="stylesheet" href="style.css" />   
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
    
    </head>
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
<?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p><strong><a href="admin-home.php?logout='1'" style="color: blue;">Logout!</a></strong> </p>
    <?php endif ?>
    </div>

    </div>
    <div class="admin-header">
	<h1>User Details Edit Form</h1>
    </div>
    <div class="head-links">
<a href="home.php">Home</a>

</div>

<?php 
include('Server.php');
?>
<?php 

?>
    <div id="edit-content" name="table">
<form action="" method="post" >

        <table name ="form" action="" class="edit">
        <tr >
            <td class="tags">E-mail :</td>    
            <td name="new_scode">
                <input type="email" value=" <?php 
                                  
                                  $result = mysqli_query($db, $sql);
                                  while($user = mysqli_fetch_array($result)){
                                      echo $user[('email')];
                                  }
                                   
                                  ?>">
           
                 
                        
            </td>
        </tr> 
        <tr >
            <td class="tags">Password :</td>    
            <td name="new_scode">
                <label for="new_scode" name="new_scode">
            <?php 
                                  
                                  $result = mysqli_query($db, $sql);
                                  while($value = mysqli_fetch_array($result)){
                                      echo $value[('password')];
                                  }
                                   
                                  ?>
                 
                        
            </td>
        </tr> 
                                </table>
                                </form>
</html>