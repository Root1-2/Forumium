<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign-In</title>
    <link rel="stylesheet" href="../styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
</head>

<body>
    <h1 class="h-forumium">Welcome To</h1>
    <h1 class="h-forumium">Forumium</h1>
    <div class="login-container">
        <p class="p-sign-in">Sign-In</p>
        <div class="user-input">
            <form action="loginAction.php" method="post">
                <br><br><br><br>
                <p>Email or Username:</p>
                <input type="text" class="usrfield" name = "l_userName" Required>
                <p>Password: </p>
                <input type="password" class="usrfield" name = "l_password" Required> <br><br>
                <input type="checkbox">
                <span>Remember Me</span>
                <span><a class="span-forgot" href="forgotp.php">Forgot Password?</a></span>
                <button name="login" class="submit">Sign In</button>
                <span>Don't Have an Account?</span>
                <span><a class="span-register" href="register.php">Register</a></span>
            </form>
        </div>
    </div>
</body>

</html>