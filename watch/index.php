<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$page = strtolower(trim($_GET['page'] ?? 'mainpage')); 

$allowed_pages = [
    'mainpage' => 'pages',
    'movies' => 'pages',
    'series' => 'pages',
    'contact_form' => 'pages',
    'kedvencek' => 'pages',
    'signout' => 'pages',
    'login' => 'views', 
    'signup' => 'views' 
];

$protected_pages = ['mainpage', 'movies', 'series', 'contact_form', 'kedvencek', 'signout'];
if (in_array($page, $protected_pages) && !isset($_SESSION['email'])) {
    header("Location: index.php?page=login");
    exit();
}

if (array_key_exists($page, $allowed_pages)) {
    $file_path = __DIR__ . '/' . $allowed_pages[$page] . "/$page.php"; 
    if (file_exists($file_path)) {
        include $file_path;
    } else {
        http_response_code(404);
        echo "<h1>404 - Page Not Found</h1>";
        echo "<p>The requested file '$file_path' does not exist.</p>";
    }
} else {
    http_response_code(404);
    echo "<h1>404 - Invalid Page Requested</h1>";
    echo "<p>The page '$page' is not allowed or does not exist.</p>";
}
?>
