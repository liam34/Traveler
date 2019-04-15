<!-- Author: Ariel Contreras -->
<!-- Establish connection to DB -->
<?php

	// Connecting to local database

	// $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "travelexperts";

    // $connect = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

	// Uncomment below to connect to remote db 

    $servername = "remotemysql.com";
    $username = "v6hwEFbBgF";
    $password = "TZG2c8Pri7";
    $dbname = "v6hwEFbBgF";

    $connect = mysqli_connect($servername, $username, $password, $dbname, '3306') or die("Connection failed: " . mysqli_connect_error());

?>

