<?php
$servername = "localhost"; // or your database host
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "portfolio"; // the database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
