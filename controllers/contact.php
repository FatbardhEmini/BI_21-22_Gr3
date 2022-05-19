<?php

$name = $email = $message = "";
$errors = [];
if (isset($_POST['submit'])) {
    empty($_POST['name']) ? $errors["name"] = "Name is required." : $name = test_input($_POST['name']);
    empty($_POST['email']) ? $errors["email"] = "Email is required." : $email = test_input($_POST['email']);
    empty($_POST['message']) ? $errors["message"] = "Message is required." : $message = test_input($_POST['message']);

    if (!validateEmail($email)) $errors["email"] .= "Email is invalid.";

    if(count($errors)) {
        session_start();
        $_SESSION['errors'] = $errors;
        header("Location: ../message.php");
        exit();
    }

    $mailTo = 'ragipgjinovci@gmail.com';
    $headers = 'From: ' . $mailFrom;
    $txt = "You have an email from: " . $name . ".\n\n" . $message;

    mail($mailTo, "New contact from Appalicious", $txt, $headers);
    header("Location: ../message.php");
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateEmail($email)
{
    $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
    return preg_match($regex, $email);
}
