<?php

//main connection file for both admin & front end
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "onlinefoodphp";  

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {      
    die("Connection failed: " . mysqli_connect_error());
}

define('SITEURL', 'http://localhost/ofos/food-search.php'); 
?>