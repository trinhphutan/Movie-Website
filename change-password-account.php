<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
    <link rel="stylesheet" href="./assets/css/change-password.css">
</head>

<body>
    <div class="container">
        <div class="container-changePassword">
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
            <h1 class="heading-changePassword">Change password</h1>
            <div class="box">
                <form action="change-password-account_code.php" method="POST">
                    <input type="hidden" name="password_token" value="<?php if (isset($_GET['token'])) {
                                                                            echo $_GET['token'];
                                                                        } ?>">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" value="<?php if (isset($_GET['email'])) {
                                                                    echo $_GET['email'];
                                                                } ?>" class="form-email" placeholder="Enter email address">
                    </div>
                    <div class="form-group padding-b">
                        <label>New password</label>
                        <input type="password" name="new-password" class="form-email" placeholder="Enter new password">
                    </div>
                    <div class="form-group">
                        <label>Confirm password</label>
                        <input type="password" name="confirm-password" class="form-email" placeholder="Enter confirm password">
                    </div>
                    <button type="submit" name="password-update-btn" class="password-update-btn"><span>Update
                            password</span></button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>