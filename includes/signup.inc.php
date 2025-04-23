<?php
    include_once 'dbh.inc.php';

    $username = $_POST['Username'];
    $password = $_POST['Password'];

  $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password');";
  mysqli_query($conn, $sql);

  header("Location:../index.php");
  ?>
