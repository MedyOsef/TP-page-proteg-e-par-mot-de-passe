
<?php
$username_hash ='$2y$14$CtJKzeJwkiSXW3EP4/xqXOFWc0xT0LtiuVbT3yAkk6M9MhtMHi2N.'; /*Cokerico*/
$password_hash ='$2y$14$RWPe.Jxcr.nK4fPA0O03FezRxO0kSbO/9pkr5mqYSVRHZ.7UnJWhW'; /*kangourou*/
if(((isset($_POST['username'])) AND (isset($_POST['password']))) AND ($_POST['username'] AND $_POST['password'] != '')){
    if(password_verify($_POST['username'], $username_hash) && password_verify($_POST['password'], $password_hash)){
        header('Location: http://localhost:3000/destination.php');
        exit();
    }
    else{
        header('Location: http://localhost:3000/connexion.php');
        exit();
    }
}
else{
    header('Location: http://localhost:3000/connexion.php');
    exit();
}
?>