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
    <link rel="stylesheet" href="./assets/css/watch-later.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="icon" href="./assets/img/icon-website.png">
    <link rel="stylesheet" href="./assets/css/search.css">
</head>

<body>
    <div class="app-container">
        <div class="header">
            <a href="#" class="logo">𝓩𝓞𝓩𝓞</a>
            <div class="input">
                <input class="input-text" type="text" placeholder="What do you want to watch?">
                <i class="fa-solid fa-magnifying-glass"></i>
                <div class="form-search">
                    <!-- use react to render -->
                </div>
            </div>
            <div class="tv-shows watch-later-page">WATCH LATER</div>
            <!-- <div class="movies">MOVIES</div> -->
            <div class="account-management">
                <div class="account-management-icon">
                    <div class="user">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <span><?= $_SESSION['auth_user']['username']; ?></span>
                    <i class="angle-down fa-sharp fa-solid fa-angle-down"></i>
                    <ul class="account-list">
                        <li><a href="account.php" class="account">ACCOUNT</a><i
                                class="color-white fa-solid fa-angle-right"></i></li>
                        <li><a href="logout.php" class="logout">LOGOUT</a><i
                                class="color-white fa-solid fa-angle-right"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="app" class="app-content">
            <div class="app-content-left">
                <div class="sidebar-left">
                    <ul class="sidebar-left_list">
                        <li id="homeBtn"><i class="fa-solid fa-house"></i><span class="mr-home">Home</span>
                            <div class="vertical"></div>
                        </li>
                        <li id="moviesBtn"><i class="fa-solid fa-video"></i> <span>Movies</span>
                            <div class="vertical"></div>
                        </li>
                        <li id="tvSeriesBtn"><i class="fa-sharp fa-solid fa-tv"></i> <span>TV Series</span>
                            <div class="vertical"></div>
                        </li>
                        <li id="upcomingBtn"><i class="fa-solid fa-calendar-days"></i> <span>Upcoming</span>
                            <div class="vertical"></div>
                        </li>
                        <div class="separation_sidebar"></div>
                    </ul>
                    <div class="categories-container">
                        <div class="heading-categories">Categories</div>
                        <ul class="categories_list">
                            <li id="cartoonBtn">Cartoon</li>
                            <li id="comedyBtn">Comedy</li>
                            <li id="actionBtn">Action</li>
                            <li id="fantasyBtn">Fantasy</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- linh code -->
            <div class="page-watch-later">
                <div class="title-page">
                    <h1>Watch Later</h1>
                </div>
                <div class="content-page-later">
                </div>
            </div>

            <!-- <div class="seperator"></div>
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
        </div> -->
        </div>

        <script src="./assets/js/watch-later.js"></script>
        <script src="./assets/js/search.js"></script>
</body>

</html>