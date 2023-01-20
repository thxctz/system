<?php

$servername = "localhost";
$username = "root";
$password = "2003";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else {
  echo "Conexion Correcta....!!!";
}

?>