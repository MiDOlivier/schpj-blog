<?php session_start(); ?>
<!--Main Navigation-->
<header>

      <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
  <div class="container"> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
      aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
      <ul class="navbar-nav mr-auto">
      </ul>
        <div class="md-form my-0">
          <?php if ($_SESSION != NULL) : ?>
          <?php $link = 'user-data.php?user=';
                $link .= $_SESSION['user'];
                ?>
          <a href=<?=$link?>><?= $_SESSION['user']?></a>
          <?php endif ?>
          <?php if ($_SESSION == NULL) : ?>
          <a href="login-screen.php">Login</a>
          <?php endif ?>
        </div>
      <div>
          <?php if ($_SESSION != NULL) : ?>
          <a href="lista-user.php" class='ml-5  '>Usuarios</a>
          <?php endif?>
          <?php if ($_SESSION != NULL) : ?>
          <a href="lista-post.php" class='ml-5  '>Posts</a>
          <?php endif?>
          <?php if ($_SESSION != NULL) : ?>
          <a href="aula04/model/logout.php" class='ml-5  '>Log Out</a>
          <?php endif?>
      </div>
    </div>
  </div>
</nav>

<?php echo $introduction ?>

</header>
<!--Main Navigation-->