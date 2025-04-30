<?php
  if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['Username'];
    $password = $_POST['Password'];
  }
    if (empty($username) || empty($password)) {
      header("Location: ../signup.php?error=emptyfields&".$username);
      exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invalidusername=");
    exit();
  }
    else {

      $sql = "SELECT username FROM users WHERE username=?";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0) {
          header("Location: ../signup.php?error=usertaken");
          exit();
        }
        else {
          $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
            }
          else {
          $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "ss", $username, $hashedpassword);
        mysqli_stmt_execute($stmt);
        header("Location: ../signup.php?signup=success");
        }
      }
    }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
} 



?>
