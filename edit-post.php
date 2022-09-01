<?php include 'config/cabecalho.php' ?>

<?php include_once 'aula04/model/db-manager.php';
$id = $_GET['id'];
$data = getPost($id);
?>

<?php include 'blogparts/form-post.php' ?>

<?php include 'util/footer.php' ?>

<?php include 'config/rodape.php' ?>