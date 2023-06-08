<?php
  $DB_HOST = "containers-us-west-58.railway.app";
  $DB_USER = "root";
  $DB_password = "uW1bljqMvEDtGWabqYyQ";
  $DB_NAME = "railway";
  $DB_PORT="6513";
  $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_password,$DB_NAME, $DB_PORT);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
