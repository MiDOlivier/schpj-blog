<?php

    include_once 'db-manager.php';

    $posts = $_POST;

    editPost($posts);

    header('Location: http://localhost/miguellima/lista-post.php');

?>