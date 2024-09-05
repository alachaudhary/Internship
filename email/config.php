<?php

// Create connection
$conn = mysqli_connect("localhost", "ala", "ala123", "email");

// Check connection
if (!$conn) {
  echo "Connection failed: " . mysqli_connect_error();
}
?>