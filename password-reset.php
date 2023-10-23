<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset password</title>
    <link rel="stylesheet" href="./assets/css/password-reset.css">
    <link rel="icon" href="./assets/img/icon-website.png">
</head>

<body>
    <div class="container">
        <div class="container-resetPassword">
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
            <h1 class="heading-resetPassword">Reset password</h1>
            <div class="box">
                <form action="passwordReset-code.php" method="POST">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-email" placeholder="Enter email address">
                    </div>
                    <button type="submit" name="send-password-btn" class="send-password-btn"><span>Send password reset
                            link</span></button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>