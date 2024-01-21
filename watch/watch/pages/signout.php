<?php
    session_start();

    session_unset();

    session_destroy();

    header("Location: http://filmajanlo.lmarkwebbeadando.nhely.hu/index.php");
    exit();
?>