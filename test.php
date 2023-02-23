
<?php

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'maindb');
$query = "SELECT * FROM sdetails where cname='ACL CABLES PLC'";
$output = mysqli_query($db, $query);

while($value = mysqli_fetch_array($output)){
    if (($value['epsincrease']<0) ){
        echo "success";
    }else{
        echo "error";
    }
}
                
                 ?>