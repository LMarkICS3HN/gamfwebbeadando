<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/log_reg.css">
    <title>Login</title>
</head>
<body>
<div class="center">
        <h1>Login</h1>
        <form action="" method="post">
            <div class="txt_field">
                <input type="email" name="login_email" required>
                <span></span>
                <label>Email</label>

            </div>
            <div class="txt_field">
                <input type="password" name="login_password" required>
                <span></span>
                <label>Password</label>

            </div>
            <input type="submit" value="Login" name="login_btn">
            <div class="signup_link">
                Not a member? <a href="index.php?page=signup">Signup</a>
            </div>
        </form>
        <?php 
            if(isset($_POST['login_btn'])){
                if($_POST['login_email']!= '' && $_POST['login_password']!='')
                {
                    login();
                }
            }
        ?>
        <script>
            function signup(){
                location.href="index.php?page=signup";
            }
        </script>
    </div>

</body>
</html>