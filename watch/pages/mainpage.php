<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>WATCH</title>
</head>

<body>
    <?php
        session_start();
        require('../db/connection.php');
        require('../function/functions.php');
    ?>
<nav>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo"><a class="alogo" href="mainpage.php">Watch!</a></h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item"><a class="menu-item-a" href="movies.php">Movies</a></li>
                    <li class="menu-list-item"><a class="menu-item-a" href="series.php">Series</a></li>
                    <li class="menu-list-item"><a class="menu-item-a" href="kedvencek.php">Favorites</a></li>

                </ul>
            </div>
            <div class="profile-container">
                <div class="profile-text-container">
                    <span class="profile-text"><?php echo $_SESSION['email'] ?></span>
                    <button class="btnLogin-popup" onclick="signout()">signout</button>
                </div>
                <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
            </div>
        </div>
    </div>
</nav>
    
    <div class="container">
        <div class="content-container">
            <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('../img/covers/cover1.jpg');">
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">MOVIES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                    <?php movie_list(); ?>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('../img/dead.jpg');">
                <img class="featured-title" src="../img/deadlog.png" alt="">
                <p class="featured-desc">This is the origin story of former Special Forces operative turned mercenary Wade Wilson, who after being subjected to a rogue experiment that leaves him with accelerated healing powers, adopts the alter ego Deadpool. Armed with his new abilities and a dark, twisted sense of humor, Deadpool hunts down the man who nearly destroyed his life.</p>
                <button class="featured-button">WATCH</button>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">SERIES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <?php series_list(); ?>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('../img/mando.jpg');">
                <img class="featured-title" src="../img/mandolog.png" alt="">
                <p class="featured-desc">After the fall of the Empire, a lone bounty hunter travels to the outer reaches of the galaxy to protect a small, mysterious child whom hes been hired to retrieve.</p>
                <button class="featured-button">WATCH</button>
            </div>
        </div>
    </div>

    <script src="../js/main.js"></script>
    <script src="../js/reg.js"></script>
    <script>
        function signout()
        {
            location.href='/watch/index.php?page=signout';
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>





