<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resend email</title>
    <link rel="stylesheet" href="./assets/css/resend-email.css">
    <link rel="icon" href="./assets/img/icon-website.png">
</head>

<body>
    <div class="container">
        <div class="container-resend">
            <div class="alert" style="color: green; font-size: 18px; padding-bottom: 20px;">
                <?php
                if (isset($_SESSION['status'])) {
                    echo "<h4>" . $_SESSION['status'] . "<h4/>";
                    unset($_SESSION['status']);
                }
                ?>
            </div>
            <h1 class="heading-resend">Resend email verification</h1>
            <div class="box">
                <form action="resend-code.php" method="POST">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-email" placeholder="Enter email address">
                    </div>
                    <button type="submit" name="resend-email-btn" class="resend-email-btn"><span>Submit</span></button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>