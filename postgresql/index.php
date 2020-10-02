<?php

// Database connection info
$dbuser = "dbUser";
$dbpass = "dbPass";
$dbhost = "dbHost.postgres.database.azure.com";
$dbname = "dbName";

$connectionString = "host=${dbhost} port=5432 dbname=${dbname} user=${dbuser} password=${dbpass} sslmode=require";

// Make your database connection
$conn = pg_connect($connectionString);

// Read Data
$query = "SELECT * from Users";
$result_set = pg_query($connection, $query) 
  or die("Encountered an error when executing given sql statement: ". pg_last_error(). "<br/>");
while ($row = pg_fetch_row($result_set))
{
  print "Data row = ($row[0], $row[1], $row[2]). <br/>";
}
pg_free_result($result_set);

?>