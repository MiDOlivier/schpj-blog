<?php

    include_once 'db-manager.php';

    $id = $_GET['id'];

    deletePost($id);

    header('Location: http://localhost/miguellima/lista-post.php');

?>