<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log_reg.css">
    <title>WATCH</title>
</head>
<body>
<?php
    session_start();
    require('db/connection.php');
    require('function/functions.php');

    if(isset($_COOKIE['email'])){
        if(!isset($_SESSION['email'])){
            $_SESSION['email'] = $_COOKIE['email'];
        }
    }

    if(isset($_SESSION['email']) == false){
        if(isset($_GET['page']) && $_GET['page'] == 'signup'){
            require('views/signup.php');
        } else{
            require('views/login.php');
        }
    }else{
        if(isset($_GET['page']) && $_GET['page'] == 'signout'){
            signout();
        } else {
            header("Location: http://filmajanlo.lmarkwebbeadando.nhely.hu/pages/mainpage.php");
        }
    }
?>
</body>
</html>