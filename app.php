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
    <link rel="stylesheet" href="./assets/css/app.css">
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
            <div class="content">
                <div class="slider-movie">
                    <video autoplay muted loop id="spacePolice">
                        <source src="./assets/video/pexels-luis-quintero-1998560-1920x1080-24fps.mp4" type="video/mp4">
                    </video>
                    <button id="btn-pause"><i id="pause-icon" class="fa-solid fa-pause"></i>Pause</button>
                </div>
                <div class="content-movie">
                    <div class="trending-movie">
                        <div class="box-heading">
                            <h1 class="heading-trending">Trending</h1>
                            <i class="angle-down-movie fa-sharp fa-solid fa-angle-down"></i>
                        </div>
                        <div class="movie-description movie-description-1">
                            <span class="movie-description-text">
                                There are many movie genres currently trending in the world, such as superhero
                                movies, horror movies, comedy movies, romantic movies, etc. However, one of the most
                                popular and constantly updated genres is action movies.
                                <br>
                                <br>
                                Action movies provide a place for young people to satisfy their passion for intense
                                battle scenes, adventurous stunts, and thrilling chases. With stunning visuals,
                                realistic shots, and top-notch special effects, the actors in action movies have
                                become admired and beloved stars.
                                <br>
                                <br>
                                Moreover, action movies also convey meaningful messages about friendship, love,
                                teamwork, loyalty, and self-sacrifice for the greater good. With the development of
                                technology and new and creative ideas, action movies have become an art form worth
                                following and imagining.
                                <br>
                                <br>
                                That is why the action movie genre is always considered "trending" and attracts the
                                attention of audiences all over the world. Join the famous actors, beautiful scenes,
                                and violent and dramatic action scenes to experience and explore the world of action
                                movies that is making waves around the world.
                            </span>
                        </div>
                        <div class="trending-movie-list">
                            <!-- use js to render -->
                        </div>
                    </div>
                    <div id="upcoming" class="upcoming-movie">
                        <div class="box-heading">
                            <h1 class="heading-upcoming">Upcoming</h1>
                            <i class="angle-down-movie fa-sharp fa-solid fa-angle-down"></i>
                        </div>
                        <div class="movie-description movie-description-2">
                            <span class="movie-description-text">
                                An exciting adventure is about to begin as your favorite movie characters return to
                                the big screen with new, bolder, and unexpected stories. From action-packed,
                                high-speed films to mysterious sci-fi tales, to emotionally charged romantic
                                stories, each upcoming movie brings unique and unforgettable experiences for
                                audiences.
                                <br>
                                <br>
                                With talented actors, stunning cinematography, and thrilling plot twists, upcoming
                                movies are eagerly anticipated by audiences worldwide, hoping to create a new wave
                                in the film industry and provide great entertainment for viewers.
                            </span>
                        </div>
                        <div class="upcoming-movie-list">
                            <!-- use js to render -->
                        </div>
                    </div>
                    <div id="movies" class="movie">
                        <div class="box-heading">
                            <h1 class="heading-movies">Movies</h1>
                            <i class="angle-down-movie fa-sharp fa-solid fa-angle-down"></i>
                        </div>
                        <div class="movie-description movie-description-3">
                            <span class="movie-description-text">
                                After long hours of work and study, a new adventure is about to begin with thrilling
                                and captivating movies. With seasons of extended and intriguing storylines, these
                                films transport viewers to new worlds with unique characters and non-stop action.
                                From heart-wrenching crime dramas, touching family films, to hilarious comedies
                                <br>
                                <br>
                                These movies offer viewers an incredible experience and satisfy their passion for
                                cinema. With talented actors, exceptional filmmakers, and stunning cinematography,
                                these films have become an indispensable part of the entertainment industry,
                                providing audiences with meaningful and relaxing moments.

                            </span>
                        </div>
                        <div class="movies-list">
                            <!-- use js to render -->
                        </div>
                    </div>
                    <div id="tvSeries" class="tvSeries-movie">
                        <div class="box-heading">
                            <h1 class="heading-tvSeries">TV Series</h1>
                            <i class="angle-down-movie fa-sharp fa-solid fa-angle-down"></i>
                        </div>
                        <div class="movie-description movie-description-4">
                            <span class="movie-description-text">
                                After hours of stressful work and study, a new adventure is about to begin with
                                exciting and captivating TV series. With long seasons full of thrilling plotlines,
                                TV series take viewers to new worlds with unique characters and non-stop action.
                                From heart-wrenching crime dramas to emotional family stories, to hilarious
                                comedies.
                                <br>
                                <br>
                                TV series provide viewers with wonderful experiences and satisfy their passion for
                                cinema. With talented actors, exceptional filmmakers, and beautiful scenery, TV
                                series have become an essential part of the entertainment industry, bringing
                                meaningful moments of relaxation to audiences.
                            </span>
                        </div>
                        <div class="tvSeries-movie-list">
                            <!-- <div class="img-tv">
                                <img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&refresh=604800&url=https://hiphimmoi.net/wp-content/uploads/2023/03/nha-trang-that-thu-ke-phan-boi-2019-118869-thumbnail.jpg">
                            </div> -->
                            <!-- use js to render -->
                        </div>
                    </div>
                    <div id="cartoon" class="cartoon-movie">
                        <div class="box-heading">
                            <h1 class="heading-cartoon">Cartoon</h1>
                            <i class="angle-down-movie fa-sharp fa-solid fa-angle-down"></i>
                        </div>
                        <div class="movie-description movie-description-5">
                            <span class="movie-description-text">
                                In the world of animation, there is a genre that is captivating and cannot be
                                ignored: cartoons. These films often bring touching and humorous stories to the
                                audience through characters full of emotion and comical situations.
                                <br>
                                <br>
                                With the development of graphics technology, filmmakers have shown their creativity
                                through amazing graphics techniques, creating lively lines and bright colors.
                                Cartoons are not just for children, but also attract adults with stories that have
                                educational and inspirational power.
                                <br>
                                <br>
                                Cartoons have been and are still one of the favorite film genres of many global
                                audiences. If you want to find a film genre with a diversity of action, romance, and
                                humor, not to mention adorable characters, then cartoons are the perfect choice for
                                you.
                            </span>
                        </div>
                        <div class="cartoon-movie-list">
                            <!-- use js to render -->
                        </div>
                    </div>
                    <div id="comedy" class="comedy-movie">
                        <div class="box-heading">
                            <h1 class="heading-comedy">Comedy</h1>
                            <i class="angle-down-movie fa-sharp fa-solid fa-angle-down"></i>
                        </div>
                        <div class="movie-description movie-description-6">
                            <span class="movie-description-text">
                                A bright smile accompanied by a sense of joy and happiness is the perfect measure
                                for comedy films. Created from unexpected situations, humorous twists, and sweet
                                romantic couples, comedies will bring you moments of creative and exciting
                                entertainment.
                                <br>
                                <br>
                                Sometimes, just a small funny scene can convey feelings of happiness and joy in life
                                to the audience. Let's enjoy creative and exciting comedy films together, and don't
                                forget to leave us with your hearty laughter!
                            </span>
                        </div>
                        <div class="comedy-movie-list">
                            <!-- use js to render -->
                        </div>
                    </div>
                    <div id="action" class="action-movie">
                        <div class="box-heading">
                            <h1 class="heading-action">Action</h1>
                            <i class="angle-down-movie fa-sharp fa-solid fa-angle-down"></i>
                        </div>
                        <div class="movie-description movie-description-7">
                            <span class="movie-description-text">
                                The action genre is a type of film full of heroism, drama, and challenges. With
                                intricate and surprising plot twists, warriors are created to fight against evil
                                enemies and defend justice. The intense action scenes, the display of strength and
                                decisive skills, bring suspense and satisfaction to the audience. The main
                                characters in action films are often invincible heroes, skilled racers or soldiers
                                on the battlefield, with power and determination to overcome all obstacles to
                                achieve their goals.
                                <br>
                                <br>
                                Action movies are the epitome of battles and epic fights, with tense and breathless
                                situations that require the concentration and quick judgment of the viewer. The
                                highlight of this genre is the spectacular and realistic action scenes that reflect
                                the true spirit of warriors, creating a special appeal for the audience.
                            </span>
                        </div>
                        <div class="action-movie-list">
                            <!-- use js to render -->
                        </div>
                    </div>
                    <div id="fantasy" class="fantasy-movie">
                        <div class="box-heading">
                            <h1 class="heading-fantasy">Fantasy</h1>
                            <i class="angle-down-movie fa-sharp fa-solid fa-angle-down"></i>
                        </div>
                        <div class="movie-description movie-description-8">
                            <span class="movie-description-text">
                                The power of magic, strange creatures, and mysterious worlds are uncovered in the
                                fantasy film genre. It is where imagination and reality come together in captivating
                                stories that offer mesmerizing experiences and emotions for the audience.
                                <br>
                                <br>
                                We will follow dangerous characters, mythical objects, and strange creatures through
                                battles, adventures, and quests to uncover the cause of a decisive battle between
                                different factions. Fantasy films take us to worlds that seem only to exist in
                                legends but also offer profound messages about love, courage, and sacrifice.
                                <br>
                                <br>
                                Join in heroic adventures, face unimaginable challenges, and explore the secrets of
                                the fantasy world. These films will make you feel the pain, joy, love, and
                                personality of the characters, making it impossible for you to take your eyes off
                                the screen once an adventure has begun.
                            </span>
                        </div>
                        <div class="fantasy-movie-list">
                            <!-- <div class="img-fantasy">
                                <img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&refresh=604800&url=https://hiphimmoi.net/wp-content/uploads/2023/03/nha-trang-that-thu-ke-phan-boi-2019-118869-thumbnail.jpg">
                            </div> -->
                            <!-- use js to render -->
                        </div>
                    </div>
                </div>
                <div class="seperator"></div>
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
        </div>
    </div>
    <div class="page-product">
        <!-- use react to render -->
    </div>
    </div>
    <!-- <script src="./assets/js/data.js"></script> -->
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/search.js"></script>
</body>

</html>