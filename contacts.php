<?php
    require "controllers/file.php";
    
    // Page configuration
    $title = 'Contacts';
    $child = 'views/pages/_contacts.php';

    $messagesFileController = new File("messages", "messages.txt");
    $messages = $messagesFileController->read();

    include('views/layouts/default.php');
?>