<?php


//validación del lado del servidor

$salt = 2021; // $salt = time() //valor impredescible
$hashAlmacenado = md5(12345, $salt);


if (isset($_POST['btn-signup'])) {
    $email = trim($_POST['email']);
    $upass = trim($_POST['pass']);
    $hash = md5($upass, $salt);

    if (empty($email)) {
        $error = "enter your email !";
    } else if (!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email)) {
        $error = "not valid email !";
    } else if (empty($upass)) {
        $error = "enter password !";
    } else if (strlen($upass) < 5) {
        $error = "Minimum 5 characters !";
    } else if ($email !== 'elelog@elelog.es') {
        $error = "Invalid user !";
    } else if ($hash !== $hashAlmacenado) {
        $error = "Invalid password !";
    } else {
        header('location:frontend\assets\html\home.html');
    }
}
