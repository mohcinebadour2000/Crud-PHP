<?php
// connectDatabase.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_php_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    $connectionStatus = "Probleme de connection avec la base de donnees"; // Set the status to indicate failure
} else {
    $connectionStatus = "Connection etablie"; // Set the status to indicate success
}
?>
