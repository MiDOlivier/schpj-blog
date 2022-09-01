<?php include 'config/cabecalho.php' ?>
<!-- content -->

    <?php

    include_once 'db-manager.php';

    insertUser($_POST);

    header('Location: http://localhost/miguellima/lista-user.php');
    ?>

<!-- content -->
<?php include 'util/footer.php' ?>

<?php include 'config/rodape.php' ?>