<?php
$username = "root";
$password = "test123`";
$servername = "localhost";
$db = "members";

$con = mysqli_connect("$servername","$username","$password","$db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 