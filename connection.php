<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//echo "conection ok";
// Check connection
if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 ?>