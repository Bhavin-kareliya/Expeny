<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Expeny";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  return false;
}
return true;
?>