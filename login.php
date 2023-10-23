<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="icon" href="./assets/img/icon-website.png">
</head>

<body>
    <div class="interface-login">
        <form action="logincode.php" method="POST" class="div-login">
            <?php
            if (isset($_SESSION['status'])) {
            ?>
                <div style="color: green; font-size: 18px; padding-bottom: 10px;" class="alert alert-success">
                    <h4><?= $_SESSION['status']; ?></h4>
                </div>
            <?php
                unset($_SESSION['status']);
            }
            ?>
            <h1 style="color: #e7d666; margin-top: -5px;">Login</h1>
            <div class="input email form-group">
                <input type="text" name="email" placeholder="Email Address">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
            </div>
            <div class="input password form-group">
                <input type="password" name="password" placeholder="Password">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>
            </div>
            <div class="form-group">
                <button type="submit" name="login-btn" class="login-btn">Login</button>
            </div>
            <a style="color: yellow;" href="password-reset.php">Forgot your password?</a>
            <p>Not yet a member?<a class="signUpBtn" href="register.php">Sign Up</a></p>
            <h1 style="color: green; font-size: 14px;">
                Did not recieve your verification email?
                <a style="color: yellow;" href="resend-email-verification.php">Resend</a>
            </h1>
        </form>
    </div>
    <img class="background" src="./assets/img/background-new.jpeg">
</body>

</html>