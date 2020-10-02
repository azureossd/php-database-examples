<?php

// Database connection Info
$dbuser = "dbUser";
$dbpass = "dbPass";
$dbhost = "dbHost.mysql.database.azure.com";
$dbname = "dbName";

// Make your database connection
$conn = mysqli_init();
mysqli_real_connect($conn, $dbhost, $dbuser, $dbpass, $dbname, 3306);

// Read Data
$res = mysqli_query($conn, 'SELECT * FROM Users');
while($row = mysqli_fetch_assoc($res)) {
  var_dump($row);
}

?>