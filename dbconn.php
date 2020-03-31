<?php
//db credentials
$servername = 'localhost';
$dbusername = "root";
$dbpassword = "root";
$dbname = "folio";

//connecting to the database
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
	die("Connection error".$conn->connect_error);
}
// else{
// 	echo "Connection successful.";
// }
?>