<?php

// //Database credentials.
// $servername = "localhost";
// $dBUsername = "root";
// $dBPassword = "";
// $dBName = "ppams";
//
// //Attempt to connect to MySQL database
// $conn = mysqli_connect ($servername, $dBUsername, $dBPassword, $dBName);
//
//
// //Check connection
// if($conn === false)
// {
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }


// Database credentials.

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ppams');

/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>
