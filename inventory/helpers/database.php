<?php
  $servername = "mysql.sittv.com";
  $username = "sittv";
  $password = "BBRNnT9iDDeJH7";
  $dbname = "sittv_inventory";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>
