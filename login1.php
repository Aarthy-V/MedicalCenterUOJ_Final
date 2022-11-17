<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form </title>
    <link rel="stylesheet" href="style1.css">
       
</head>

</head>
<body>
    <?php
            error_reporting(0);
            session_start();
            session_destroy();
            echo $_SESSION['loginMessage'];
        ?>
    <div class="login-box">
        <h2>Login</h2>
        <form action="login_check.php" method="POST">
            <div class="user-box">
                <label>Username</label>
                <input type="text" name="username" required="">
                
            </div>
            <div class="user-box">
                <label>Password</label>
                <input type="password" name="password" required="">
                
            </div>
            <a>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
                <input type="submit" name="submit" value="Login">
            </a>
        </form>
    </div>
</body>
</html>