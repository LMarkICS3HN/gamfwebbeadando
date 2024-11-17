<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/log_reg.css">
    <title>Signup</title>
</head>
<body>
    <?php
    require_once __DIR__ . '/../function/functions.php'; 
    ?>
    <div class="center">
        <h1>Signup</h1>
        <form action="" method="post">
            <div class="txt_field">
                <input type="email" name="signup_email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="text" name="signup_username" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="new_password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt_field">
                <input type="password" name="confirm_password" required>
                <span></span>
                <label>Confirm Password</label>
            </div>
            <input type="submit" value="Register" name="signup_btn">
            <div class="signup_link">
                Already a member? <a href="index.php?page=login">Login</a>
            </div>
        </form>
        <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $new_password = $_POST['new_password'] ?? '';
            $confirm_password = $_POST['confirm_password'] ?? '';
            $signup_email = $_POST['signup_email'] ?? '';
            $signup_username = $_POST['signup_username'] ?? '';

            // Ellenőrizzük, hogy minden mező kitöltött-e
            if (!empty($new_password) && !empty($confirm_password) && !empty($signup_email) && !empty($signup_username)) {
                if ($new_password === $confirm_password) {
                    signup(); // Meghívja a functions.php-ban definiált signup() függvényt
                } else {
                    echo "<div style='color: red;'>Passwords do not match.</div>";
                }
            } else {
                echo "<div style='color: red;'>Please fill out all fields.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
