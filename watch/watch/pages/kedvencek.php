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
    <title>Favorites</title>
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
            <div class="movie-list-container">
                <h1 class="movie-list-title">FAVORITES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                       
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
            location.href='./signout.php';
        }
    </script>
</body>

</html>