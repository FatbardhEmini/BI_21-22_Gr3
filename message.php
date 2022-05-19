<?php
session_start();

if(isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    ?>
        <h1>Please fix the following errors: </h1>
        <ul>
            <?php 
                foreach($errors as $error) {
                    ?>
                        <li><?= $error ?></li>
                    <?php
                }
            ?>
        </ul>
    <?php
    unset($_SESSION['errors']);
} else {
    ?>
        <h1 style="text-align: center">We successfully received your message.</h1>
    <?php
}
?>