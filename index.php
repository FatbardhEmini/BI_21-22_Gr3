<?php
    // Page configuration
    $title = 'Home';
    $child = 'views/pages/_index.php';
    include('views/layouts/default.php');

    $cookie_value = "Testing cookies";
    setcookie("appalicious", $cookie_value, time()+3600, "/", "bi-php.test", 1, 1);
    if (isset($_COOKIE['cookie']))
    echo $_COOKIE["appalicious"];
?>