<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Series</title>
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
                <h1 class="logo"><a class="alogo" href="../index.php">Watch!</a></h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item"><a class="menu-item-a" href="movies.php">Movies</a></li>
                    <li class="menu-list-item active"><a class="menu-item-a" href="series.php">Series</a></li>
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
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('../img/mindhunt.jpeg');">
                <img class="featured-title" src="../img/mindlogo.png" alt="">
                <p class="featured-desc">In the late 1970s, two FBI agents expand criminal science by delving into the psychology of murder and getting uneasily close to all-too-real monsters.</p>
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
        </div>
    </div>

    <script src="../js/main.js"></script>
    <script>
        function signout()
        {
            location.href='/watch/index.php?page=signout';
        }
    </script>
</body>

</html>