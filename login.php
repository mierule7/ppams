<?php

if (isset($_POST['login-submit'])) { // Check did/do we name attribute name login-submit

  require 'db.config.php'; // grab the connection to database

  $username = $_POST['unm'];// Grab the information when user insert on login
  $password = $_POST['upwd'];

  if (empty($username) || empty($password)) { // Check if these information where left empty
    header("Location:index.php?error=emptyfields"); // send back to index.php and show error
    exit();
  }
  else {
    $sql = "SELECT * FROM user_tb WHERE uiUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location:index.php?error=sqlerror"); // send back to index.php and show error
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $username, $password);// Grab information from Database
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($result);
      if ($row = mysqli_fetch_assoc()) {
        $pwdCheck - password_verify($password, $row['password']); // Match the password
        if ($pwdCheck == false) {
          header("Location:index.php?error=wrongpassword"); // send back to index.php and show error
          exit();
        }
        else if ($pwdCheck == true) {
          // code...
        }
      }
      else {
        header("Location:index.php?error=nouser"); // send back to index.php and show error
        exit();
      }
    }
  }

}
else {
  header("Location:index.php"); // send back to index.php
  exit();
}
