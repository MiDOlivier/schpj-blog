<?php include 'config/cabecalho.php' ?>

<?php
include 'aula04/model/blog-data.php';
include 'aula04/model/blog-model.php';
$introduction = introsection('Batatas!');
include 'util/header.php';
?>

  <!--Main Layout-->
  <main>

    <div class="container">

        <?php include 'aula04/view/main.php' ?>

    </div>

  </main>
  <!--Main Layout-->


  <?php include 'util/footer.php' ?>

  <?php include 'config/rodape.php' ?>