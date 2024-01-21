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
                <label>username</label>
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
                <?php
                    if($_POST['new_password']!=$_POST['confirm_password']){
                        echo "<script>window.alert('Password doesnot match')</script>";
                    }
                ?>
            </div>
            <input type="submit" value="Register" name="signup_btn">
            <div class="signup_link">
                You a member? <a href="index.php?page=login">Login</a>
            </div>
        </form>
        <?php 
            if(isset($_POST['signup_btn'])){
                if($_POST['confirm_password']!='' &&
                    $_POST['new_password']!='' &&
                    $_POST['confirm_password']== $_POST['new_password']
                    && $_POST['signup_username'] != ''
                    && $_POST['signup_email'] != '')
                    {
                        signup();
                    }
            }
        ?>
    </div>

</body>
</html>