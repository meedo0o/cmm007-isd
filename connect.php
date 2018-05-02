<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbName = "isd";

// Create connection
$conn =  mysqli_connect($dbservername, $dbusername, $dbpassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}