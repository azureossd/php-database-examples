<?php

// Database connection Info
$connectionInfo = array(
    "UID" => "dbUser",
    "pwd" => "dbPass",
    "Database" => "dbName",
    "LoginTimeout" => 30,
    "Encrypt" => 1,
    "TrustServerCertificate" => 0
);
$serverName = "tcp:dbHost.database.windows.net,1433";

// Make your database connection
$conn = sqlsrv_connect($serverName, $connectionInfo);

$tsql= "SELECT * FROM [SalesLT].[Product] WHERE ProductID = 680";
$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ($row['ProductName'] . PHP_EOL);
}
sqlsrv_free_stmt($getResults);

?>