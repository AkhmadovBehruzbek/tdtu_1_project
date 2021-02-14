<?php

  $host = "localhost";
  $user = "root";
  $password = "";
  $db_name = "tdtu";

  $conn = mysqli_connect($host, $user, $password, $db_name);

  mysqli_query($conn, "SET NAMES 'utf8'");

  // $query = "insert into users (login, parol) values ('admin', 'salom')";

  // $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  // var_dump($result);

  

?>