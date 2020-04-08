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
        <div class="col-md-6 regn">
            <h2>Register</h2>
            <form method="post" action="register.php">
                <?php include('error.php'); ?>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password_1" class="form-control">
                </div>
                <div class="form-group">
                    <label>Confirm password</label>
                    <input type="password" name="password_2" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
                </div>
                <p>
                    Already a member? <a href="login.php">Sign in</a>
                </p>
            </form>
        </div>
    </div>
    </div>
</div>


</body>
</html>
