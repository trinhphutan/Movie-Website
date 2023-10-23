<?php
session_start();
include('authentication.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Website</title>
    <link rel="stylesheet" href="./assets/css/account.css">
    <link rel="stylesheet" href="./assets/css/search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="icon" href="./assets/img/icon-website.png">
</head>

<body>
    <div class="app-container">
        <div class="header">
            <a href="#" class="logo">𝓩𝓞𝓩𝓞</a>
            <div class="input">
                <input class="input-text" type="text" placeholder="What do you want to watch?">
                <i class="fa-solid fa-magnifying-glass"></i>
                <div class="form-search">

                </div>
            </div>
            <div class="tv-shows watch-later-page">WATCH LATER</div>
            <div class="account-management">
                <div class="account-management-icon">
                    <div class="user">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <span><?= $_SESSION['auth_user']['username']; ?></span>
                    <i class="angle-down fa-sharp fa-solid fa-angle-down"></i>
                    <ul class="account-list">
                        <li><a href="account.php" class="account">ACCOUNT</a><i class="color-white fa-solid fa-angle-right"></i></li>
                        <li><a href="logout.php" class="logout">LOGOUT</a><i class="color-white fa-solid fa-angle-right"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="container-account">
                    <h1 class="heading-account">Account Management</h1>
                    <div class="account-info">
                        <h1 class="heading-info">Account information</h1>
                        <label>Username: <span><?= $_SESSION['auth_user']['username']; ?></span></label>
                        <label>Email address: <span><?= $_SESSION['auth_user']['email']; ?></span></label>
                        <label>Phone number: <span><?= $_SESSION['auth_user']['phone']; ?></span></label>
                    </div>
                    <div class="sperator"></div>
                    <form action="change-password-account_code.php" method="POST" class="change-password">
                        <h1 class="heading-change-password">Change password</h1>
                        <div class="form-group">
                            <label class="heading-send-email">Please enter your email address if you want to change your
                                password!
                            </label>
                            <?php
                            if (isset($_SESSION['status'])) {
                            ?>
                                <div style="color: #155555; font-size: 18px; margin-bottom: -25px;" class="alert alert-success">
                                    <h4><?= $_SESSION['status']; ?></h4>
                                </div>
                            <?php
                                unset($_SESSION['status']);
                            }
                            ?>
                            <input type="email" name="email" class="form-email" placeholder="Enter email address">
                        </div>
                        <button type="submit" name="send-email-account" class="send-email-account"><span>Send</span></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            <h1 class="heading-footer">Questions? Contact us.</h1>
            <div class="footer-content-list">
                <div class="footer-content-item">
                    <p>FAQ</p>
                    <p>Investor Relations</p>
                    <p>Privacy</p>
                    <p>Account</p>
                </div>
                <div class="footer-content-item">
                    <p>Help Center</p>
                    <p>Only on ZoZo</p>
                    <p>Cookie Preferences</p>
                    <p>Home</p>
                </div>
                <div class="footer-content-item">
                    <p>Movies</p>
                    <p>TV Series</p>
                    <p>Upcoming</p>
                    <p>Trending</p>
                </div>
                <div class="footer-content-item">
                    <p>Cartoon</p>
                    <p>Comedy</p>
                    <p>Action</p>
                    <p>Fantasy</p>
                </div>
            </div>
            <div class="support" title="Chat with support staff">
                <img id="support-img" class="support-img" src="./assets/img/chatbot-img.png" alt="">
            </div>
        </div>
    </div>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/search.js"></script>
</body>

</html>