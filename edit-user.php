<?php include 'config/cabecalho.php' ?>

<?php include_once 'aula04/model/db-manager.php';
$id = $_GET['id'];
$data = getUser($id);
?>

<?php include 'blogparts/create-account.php' ?>

<?php include 'util/footer.php' ?>

<?php include 'config/rodape.php' ?>