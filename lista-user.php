<?php include 'config/cabecalho.php' ?>
<a href="index.php"><h3 class='text-right mt-3 mr-5'>Retornar ao Index ></h3></a>
  <!--content-->
        <h1 class="text-center">Gerenciador de Usuarios</h1>
        <?php include_once 'aula04/model/blog-model.php'?>
        <?php $table = getUserTable(); ?>
        <?php include 'blogparts/userlista.php' ?>
  <!--content-->


  <?php include 'util/footer.php' ?>

  <?php include 'config/rodape.php' ?>