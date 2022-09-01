<?php include 'config/cabecalho.php' ?>

<?php
include 'pageparts/intro.php';
$introduction = introsection();
include 'util/header.php';
?>

  <!--Main Layout-->
  <main>

    <div class="container">

        <?php include 'pageparts/features.php' ?>

        <?php include 'pageparts/testimonials.php' ?>

        <?php include 'pageparts/pricing.php' ?>

        <?php include 'pageparts/contact.php' ?>

    </div>

  </main>
  <!--Main Layout-->


  <?php include 'util/footer.php' ?>

  <?php include 'config/rodape.php' ?>