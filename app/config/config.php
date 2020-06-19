<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$dbName = "abc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

