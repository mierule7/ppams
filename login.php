<?php

if (isset($_POST['login-submit'])) {

  require 'db.config.php';

  $username = $_POST['uid'];
  $password = $_POST['upwd'];

  if (empty($username) || empty($password)) {
    header("Location:login.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM user_tb WHERE username=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
      header("Location:login.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $username,$password);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
    }
  }

}
else {
  header("Location:login.php");
  exit();
}
