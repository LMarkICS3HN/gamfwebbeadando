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
    <title>Movies</title>
</head>

<body>
    <?php
        session_start();
        require('../db/connection.php');
        require('../views/navbar.php');
        require('../function/functions.php');
    ?>

    <div class="container">
        <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('../img/13hrscover.jpeg');">
                <img class="featured-title" src="../img/13logo.png" alt="">
                <p class="featured-desc">Libya, 2012. At an unofficial CIA base in Benghazi a group of ex-military contractors are providing security. In the aftermath of Gaddafi's downfall a power vacuum exists and the climate is volatile. Military weapons are freely available. The US Ambassador to Libya, Chris Stevens, makes a visit to the area, staying in a compound near the CIA base. On the night of 11 September, 2012, the Ambassador's compound is attacked by hordes of heavily armed locals. The only forces willing and able to defend it are six CIA contractors.</p>
                <button class="featured-button">WATCH</button>
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