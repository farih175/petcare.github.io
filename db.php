<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "petcare";

$conn = mysqli_connect($server, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

echo "connected to DB";
?>