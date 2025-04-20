<?php
  //host
  $host =  "localhost";
  //db name
  $dbname = "auth-sys";

  //user
  $user = "root";

  //password
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

  if($conn == true) {
    echo "It's connected!";
  } else {
    echo "Connection has failed: error";
  }

?>