<?php include 'config/cabecalho.php' ?>
<!-- content -->

    <?php

    include_once 'db-manager.php';

    insertPost($_POST);

    header('Location: http://localhost/miguellima/lista-post.php');
    ?>

<!-- content -->
<?php include 'util/footer.php' ?>

<?php include 'config/rodape.php' ?>