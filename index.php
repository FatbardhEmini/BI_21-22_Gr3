<?php
    if(isset($_POST['clearCookies'])) {
        setcookie("visits", "", time() - 3600);
        unset($_COOKIE['visits']);
        unset($_POST['clearCookies']);
    }

    if(isset($_COOKIE['visits'])) {
        $_COOKIE['visits']++;
    } else {
        $_COOKIE['visits'] = 1;
    }
    setcookie('visits', $_COOKIE['visits'], time() + 3600 * 24 * 365, "/");

    if ($_COOKIE['visits'] > 1) {
        echo "<div class='box'>This is visit number " . $_COOKIE['visits'] . " 
        <form action='" . $_SERVER['PHP_SELF'] . "' method='POST'><button type='submit' name='clearCookies'>Clear</button></form>
        </div>";
    } else { // First visit
        echo "<div class='box'>Welcome to my website!!</div>";
    }

    // Page configuration
    $title = 'Home';
    $child = 'views/pages/_index.php';
    include('views/layouts/default.php');
?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>