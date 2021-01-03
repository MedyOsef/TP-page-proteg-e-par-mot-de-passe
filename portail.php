<?php

$username ='Cokerico';
$password_hash ='$2y$14$RWPe.Jxcr.nK4fPA0O03FezRxO0kSbO/9pkr5mqYSVRHZ.7UnJWhW'; /*kangourou*/

if (
    isset(
        $_POST['username'],
        $_POST['password']
    ) && !empty($_POST['username'])
    && !empty($_POST['password'])
) {
    if ($_POST['username'] === $username && password_verify($_POST['password'], $password_hash)) {
        header('Location: http://localhost:3000/destination.php');
        exit();
    } else {
        header('Location: http://localhost:3000/connexion.php');
        exit();
    }
} else {
    header('Location: http://localhost:3000/connexion.php');
    exit();
}