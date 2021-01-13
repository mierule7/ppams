<?php

include 'db.config.php';
include 'user.php';

// Insert new user
if (isset($_POST['save'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
}


// Delete user
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM user WHERE id=$id")
  //or die($mysqli->error());
  or die($mysqli->connect_error);

  // redirect back to user
  header("Location: user.php");
}


 ?>
