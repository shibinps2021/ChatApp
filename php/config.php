<?php
  $DB_HOST = "containers-us-west-173.railway.app";
  $DB_USER = "root";
  $DB_password = "Fs3CqcT3Fyj85Hjne3uy";
  $DB_NAME = "railway";
  $DB_PORT="7872"
  $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_password, $DB_NAME,$DB_PORT);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
