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
    <link rel="stylesheet" href="./assets/css/titlte.css">
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
            <div class="account-management">
                <div class="account-management-icon">
                    <div class="user">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <span class="user-name"><?= $_SESSION['auth_user']['username']; ?></span>
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
            <div class="page-product">
                <!-- use react to render -->
            </div>
        </div>
    </div>
    <div class="movie"></div>
    <div class="box-video">
        <video class="video" src="./assets/video/Avatar2.mp4" controls>
            </vid>
    </div>
    </div>

    <script src="./assets/js/search.js"></script>
    <script src="./assets/js/title.js"></script>

</body>

</html>