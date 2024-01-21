<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/log_reg.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Contact Form</title>
</head>
<body>
    <?php
        session_start();
        require('../db/connection.php');
        require('../views/navbar.php');
        require('../function/functions.php');
    ?>
    <div class="center">
        <h1>Contact Form</h1>
        <form action="" method="post">
            <div class="txt_field">
                <input type="text" name="name" required>
                <span></span>
                <label>Name</label>
            </div>
            <div class="txt_field">
                <input type="email" name="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <textarea name="message" required></textarea>
                <span></span>
            </div>
            <input type="submit" value="Send Message" name="submit_btn">
        </form>
    </div>

    <script src="../js/main.js"></script>
    <script>
        function signout()
        {
            location.href='./signout.php';
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <?php
        if (isset($_POST['submit_btn'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $sql = "INSERT INTO contacts (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
            if (set_data($sql)) {
                echo '<div style="color: white; font-weight: bold;">Data saved successfully!</div>';
            } else {
                echo '<div style="color: white; font-weight: bold;">Error saving data.</div>';
            }
        }
    ?>

</body>
</html>