<?php
include 'blog-model.php';
$out = checkPassword($_POST);
$user = getUserByName($_POST['user']);
if ($out == true) {
    session_start();
    $_SESSION['id'] =  $user[0];
    $_SESSION['user'] =  $user[1];
    $_SESSION['passwd'] =  $user[2];
    header('Location: http://localhost/miguellima/index.php');
} elseif ($out == false) {
    header('Location: http://localhost/miguellima/login-screen.php?erro=true');
}

?>