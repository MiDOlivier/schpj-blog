<!--Grid row-->
<div class="row">

<!--Grid column-->
<div class="col-lg-4 mb-4">
  <!--Featured image-->
  <div class="view overlay z-depth-1">
    <img src="<?= $row[0] ?>" class="img-fluid" alt="First sample image">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-lg-7 mb-4">
  <!--Excerpt-->
  <a href="" class="<?= $row[1] ?>">
    <h6 class="pb-1"><i class="fas fa-heart"></i><strong> <?= $row[2] ?> </strong></h6>
  </a>
  <h4 class="mb-4"><strong><?= $row[3] ?></strong></h4>
  <p><?= $row[4] ?></p>
  <p>by <a><strong><?= $row[5] ?></strong></a><?= $row[6] ?></p>
  <a class="btn btn-primary">Read more</a>
</div>
<!--Grid column-->

</div>
<!--Grid row-->