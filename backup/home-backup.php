<?php
    session_start();

   if(isset($_SESSION['username'])){

        $_SESSION['msg'] = "You must login first to view this page";
        header("location:login.php");
    }

    /*if(isset($_GET['logout'])){

        session_destroy();
        unset($_SESSION['username']);
        header("location :login.php");

    }*/

?>

<html>
    <head>
        <title>Share Purchasing Advisor</title>
        <link rel="stylesheet" href="css\style.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>

        <h1>This is the home page</h1>
        <?php if(isset($_SESSION['success'])) : ?>
    <div>
        <h3>

            <?php 
            
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            
            ?>


        </h3>
        <h3>
        Welcome <strong><?php echo $_SESSION['username'] ?> </strong>
    </h3>
    </div>
        <div class="container" >
            <div class="title">Share Purchasing Advisor</div>
            <form method="post" action="home.php">
                <div class="user-details">
                   <div class="input-box">
                        <span class="details" name="scode">Share Code</span>
                        <input type="text" name="scode" placeholder="Enter Share Code" required>
                    </div>
                    
                   
                </div>
                <div class="button">
                    <input type="submit" method="post" value= "Compute!">
                </div>

                
            </form>
        </div>
        <div name="result" id="result"> 
        </div>
<?php if(isset($_SESSION['success'])) : ?>
    <div>
        <h3>

            <?php 
            
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            
            ?>


        </h3>
    </div>
<?php endif?>

    <button value="Logout">
        <a href="home.php? logout='1'"></a>
    </button>

    <?php endif?>

    </body>
</html>