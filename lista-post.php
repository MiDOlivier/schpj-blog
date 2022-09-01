<?php session_start();
?>
<?php include 'config/cabecalho.php' ?>
<a href="index.php"><h3 class='text-right mt-3 mr-5'>Retornar ao Index ></h3></a>

  <!--content-->
        <h1 class="text-center">Area de Edicao dos Posts</h1>
        <?php include_once 'aula04/model/blog-model.php'?>
        <?php $table = getPostTable(); ?>
        <?php include 'blogparts/lista.php' ?>
  <!--content-->


  <?php include 'util/footer.php' ?>

  <?php include 'config/rodape.php' ?>