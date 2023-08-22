<?php
$servername = "localhost";
$username = "myuser";
$password = "mypass@321";
$SQL_DB = "lookupdb";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($conn,$SQL_DB );
?>