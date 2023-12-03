<?php
$menuItems = array(
    'Favorites' => 'kedvencek.php',
    'Series' => 'series.php',
    'Movies' => 'movies.php'
);
?>

<nav class="navbar">
    <div class="navbar-container">
        <div class="logo-container">
            <h1 class="logo"><a class="alogo" href="mainpage.php">Watch!</a></h1>
        </div>
        <div class="menu-container">
            <ul class="menu-list">
                <?php
                foreach ($menuItems as $menuName => $link) {
                    echo "<li><a class=\"menu-list-item\" href=\"$link\">$menuName</a></li>";
                }
                ?>
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
</nav>

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

<link rel="stylesheet" href="../css/style.css">
