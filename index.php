<?php
require_once "login.php";
require_once "db.config.php";

// if (isset($_SESSION['login']))
// {
//   header("location: dashboard.php"); // Redirectiong to Dashboard
// }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
    <title>Permit Pro Asset Management System</title>
</head>
<style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
<!-- <body>
    <div class="container">
        <div class="login">
           <img src="img/backgroundimage_asset.png" width="90"/>
            <form class="login-form" method="post" action="dashboard.php">
                <input class="usr" name="unm" type="text" placeholder="username">
                <input class="pwd" name="upwd" type="password" placeholder="password">
                <input class="btn" type="submit" name="login-submit" value="Login">
            </form>
        </div>
    </div>
</body> -->
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>
