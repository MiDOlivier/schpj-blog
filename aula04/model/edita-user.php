<?php

    include_once 'db-manager.php';

    $user = $_POST;

    editUser($user);

    header('Location: http://localhost/miguellima/lista-user.php');

?>