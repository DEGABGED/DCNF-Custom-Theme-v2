<div class="row">

  <!-- Post Content Column -->
  <!-- New div to disable flex display for the content -->
  <div class="post-content-column">
    <!-- Title -->
    <h1 class="mt-4"><?php the_title(); ?></h1>

    <!-- Author and Datetime -->
    <p class="lead">
    by <a href="#"><?php the_author(); ?></a>
    <br />
    Posted on <?php the_date(); ?>
    </p>

    <!-- Preview Image -->
    <!--img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

    <hr-->

    <!-- Post Content -->
    <hr class="separator" />
    <?php the_post_thumbnail(); ?>
    <hr />
    <div class="post-content">
    <?php the_content(); ?>
    </div>
  </div>

</div>
<!-- /.row -->
