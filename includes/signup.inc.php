<?php
  if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['Username'];
    $password = $_POST['Password'];

    if (empty($username) || empty($password)) {
      header("Location: ../signup.php?error=emptyfields&Username=".$username)
    }
  }

    

  $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password');";
  mysqli_query($conn, $sql);

  header("Location:../index.php");
  ?>
