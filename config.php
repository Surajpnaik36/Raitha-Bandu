<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'farmer');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// echo("Connection was succesful");

//Check the connection
if($conn == false){
    die('Error: Cannot connect');
}
else{
    // echo("Connection was Succesful");
}

?>
