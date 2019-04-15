<?php
// Author: Abdulwahab Alansari 

// Connecting to local database
// $connect = mysqli_connect('localhost', 'root', '', 'travelexperts');
// if (!$connect) {
// 	die(mysql_error());
// }


// Uncomment below to connect remote db

$connect = mysqli_connect('remotemysql.com', 'v6hwEFbBgF', 'TZG2c8Pri7', 'v6hwEFbBgF', '3306');
if (!$connect) {
	die(mysql_error());
}
?>