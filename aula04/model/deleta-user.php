<?php

    include_once 'db-manager.php';

    $id = $_GET['id'];

    deleteUser($id);

    header('Location: http://localhost/miguellima/lista-user.php');

?>