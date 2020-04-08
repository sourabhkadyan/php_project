<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>


<div class="container">
    <div class="login-box">
    <div class="row">
        <div class="col-md-6 login">
            <h2>Login</h2>
            <form method="post" action="login.php">
                <?php include('error.php'); ?>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="login_user">Login</button>
                </div>
                <p>
                    Not yet a member? <a href="register.php">Sign up</a>
                </p>
            </form>
        </div>
    </div>
    </div>
</div>


</body>
</html>
