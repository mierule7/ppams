<?php

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
    <title>Inventory</title>
</head>
<!-- ******************** THIS IS FOR HEADER ************************ -->

<?php include 'header.php'; ?>

<!-- **************************************************************** -->
<!-- ******************* THIS IS FOR SIDENAV ************************ -->

<?php include 'sidenav.php'; ?>

<!-- **************************************************************** -->





<main>
    <div class="main-wrapper">
     <div class="back-colour">
<div >

<!-- <table width="380" align="center">
<CAPTION><h3>ADD NEW ADMIN</h3></CAPTION>
<form name="fmCandidates" id="fmCandidates" action="candidates.php" method="post" onsubmit="return candidateValidate(this)">
<tr>
    <td bgcolor="#FAEBD7">Firstname</td>
    <td bgcolor="#FAEBD7"><input type="text" name="firstname" /></td>
</tr>
<tr>
    <td bgcolor="#FAEBD7">Lastname</td>
    <td bgcolor="#FAEBD7"><input type="text" name="lastname" /></td>
</tr>
<tr>
    <td bgcolor="#FAEBD7">Email</td>
    <td bgcolor="#FAEBD7"><input type="text" name="email" /></td>
</tr>
<tr>
    <td bgcolor="#FAEBD7">Password</td>
    <td bgcolor="#FAEBD7"><input type="password" name="password" /></td>
</tr>
<tr>
    <td bgcolor="#BDB76B">&nbsp;</td>
    <td bgcolor="#BDB76B"><input type="submit" name="Submit" value="Add" /></td>
</tr>
</table> -->

<table border="2" width="98%" align="center">
<CAPTION><h3>User Listing</h3></CAPTION>
<tr>
<th>No</th>
<th>Id</th>
<th>Name</th>
<th>E-mail</th>
<th>Action</th>
</tr>

<?php

// Include config file
require_once "db.config.php";
// Number
$i = 1;

$sql = "SELECT id, username, email FROM users";
$result = $mysqli->query($sql);

// // deleting sql query
// // check if the 'id' variable is set in URL
//  if (isset($_GET['id']))
//  {
//  // get id value
//  $id = $_GET['id'];
//
//  // delete the entry
//  $result = ("DELETE FROM users WHERE id='$id'")
//  or die("The position does not exist ... \n");
//
//  // redirect back to user
//  header("Location: user.php");
//  }
//  else
//  // do nothing


if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        // echo '<td><a href="user.php?id=' . $row['id'] . '">Delete Admin</a></td>';
        echo '<td>
        <a href="user.php?edit=' . $row['id'] . '">Edit</a>
        <a href="process.php?delete=' . $row['id'] . '">Delete</a>
        </td>';
        echo "</tr>";
        $i++;
    }
}
else
{
    echo "0 results";
}

    // $mysqli->close();

?>







<!-- ******************** THIS IS FOR FOOTER ************************ -->

<?php include 'footer.php'; ?>

<!-- **************************************************************** -->
</html>
