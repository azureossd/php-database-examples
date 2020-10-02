<?php

require 'vendor/autoload.php';

// Database connection info
$dbuser = "dbUser";
$dbpass = "dbPass";
$dbhost = "dbHost.mongo.cosmos.azure.com";

$conn = new MongoDB\Client("mongodb://${dbuser}:${dbpass}@${dbhost}:27017");

// ex. $collection = $conn->db_name->collection_name;
$collection = $conn->demo->users;

$result = $collection.find();
foreach ($result as $entry) {
    echo $entry['_id'], ': ', $entry['name'], "\n";
}

?>