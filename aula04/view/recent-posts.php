<!-- Main Posts Layout -->
<main>

    <div class="container">

        <!--Section: Blog v.3-->
        <section class="section extra-margins pb-3 text-center text-lg-left wow fadeIn" data-wow-delay="0.3s">

        <!--Section heading-->
        <h2 class="font-weight-bold text-center h1 my-5">Recent posts</h2>
        <!--Section description-->
        <p class="text-center grey-text mb-5 mx-auto w-responsive">Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.</p>

        <?= $recentPosts = getRecentPosts($m) ?>

        </section>
        <!-- Section: Blog v.3-->

        <hr class="mb-5">
      
      