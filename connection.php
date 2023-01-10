<?php      
    $host = "localhost";//name of the host in database
    $user = "user";//name of user loggining in to database
    $password = 'mine';//password for the login
    $db_name = "r20";//name of the database
      
    $con = new mysqli($host, $user, $password, $db_name);//making connection to the database  
    if($con->connect_error) {
        die("Failed to connect with MySQL: ". $con->connect_error);//If connection failed display error
    }  
?>
