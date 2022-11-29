<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->error) {
  die("Connection failed: " . $conn->error);
}
echo "Connected successfully";
?>