<?php
require_once __DIR__ . '/../config.php';
?>

<nav class="navbar">
    <div class="navbar-container">
        <div class="logo-container">
            <h1 class="logo"><a class="alogo" href="index.php?page=mainpage">Watch!</a></h1>
        </div>
        <div class="menu-container">
            <ul class="menu-list">
                <?php
                if (isset($menuItems) && is_array($menuItems)) {
                    foreach ($menuItems as $menuName => $link) {
                        echo "<li><a class=\"menu-list-item\" href=\"index.php?page=$link\">$menuName</a></li>";
                    }
                } else {
                    echo "<li>No menu items available</li>";
                }
                ?>
            </ul>
        </div>
        <div class="profile-container">
            <div class="profile-text-container">
                <span class="profile-text">
                    <?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : 'Guest'; ?>
                </span>
                <button class="btnLogin-popup" onclick="signout()">Signout</button>
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
<script>
    function signout() {
        location.href = 'index.php?page=signout';
    }
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<link rel="stylesheet" href="css/style.css">

