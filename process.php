<?php

include 'db.config.php';
include 'user.php';

// Insert new user
if (isset($_POST['save'])) {
  $username = $POST['username'];
}


// Delete user
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM user WHERE id=$id")
  or die($mysqli->error());

  // redirect back to user
  header("Location: user.php");
}


 ?>
