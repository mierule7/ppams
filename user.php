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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
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
       <body>
           <div class="wrapper">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="page-header clearfix">
                               <h2 class="pull-left">User Details</h2>
                               <a href="create.php" class="btn btn-success pull-right">Add New User</a>
                           </div>
                           <?php
                           // Include config file
                           require_once "db.config.php";

                           // Declare variables
                           $i = 1;

                           // Attempt select query execution
                           $sql = "SELECT * FROM users";
                           if($result = $mysqli->query($sql)){
                               if($result->num_rows > 0){
                                   echo "<table class='table table-bordered table-striped'>";
                                       echo "<thead>";
                                           echo "<tr>";
                                               echo "<th>No</th>";
                                               echo "<th>Username</th>";
                                               echo "<th>Email</th>";
                                               // echo "<th>Salary</th>";
                                               echo "<th>Action</th>";
                                           echo "</tr>";
                                       echo "</thead>";
                                       echo "<tbody>";
                                       while($row = $result->fetch_array()){
                                           echo "<tr>";
                                               echo "<td>" . $i . "</td>";
                                               echo "<td>" . $row['username'] . "</td>";
                                               echo "<td>" . $row['email'] . "</td>";
                                               // echo "<td>" . $row['salary'] . "</td>";
                                               echo "<td>";
                                                   echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                                   echo "<a href='edit.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                                   echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                               echo "</td>";
                                           echo "</tr>";
                                           $i++;
                                       }
                                       echo "</tbody>";
                                   echo "</table>";
                                   // Free result set
                                   $result->free();
                               } else{
                                   echo "<p class='lead'><em>No records were found.</em></p>";
                               }
                           } else{
                               echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                           }

                           // Close connection
                           $mysqli->close();
                           ?>
                       </div>
                   </div>
               </div>
           </div>
       </body>
      </div>
    </html>








<!-- ******************** THIS IS FOR FOOTER ************************ -->

<?php include 'footer.php'; ?>

<!-- **************************************************************** -->
</html>
