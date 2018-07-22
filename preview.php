<div class="col-sm-4 post-preview-box">
  <div class="post-preview">
    <!-- Title -->
    <div class="post-preview-title">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <h4><?php the_title(); ?></h1>
      </a>
    </div>

    <!-- Author -->
    <hr>
    <div class="post-preview-sub">
      <span class="details">
        <p class="lead">
        by
        <a href="#"><?php the_author(); ?></a>
        <br>
        <?php the_date(); ?>
        </p>
      </span>
      <span class="viewmore">
        <a href="<?php the_permalink(); ?>">
          <button type="button" class="btn btn-outline-dark" >
            View more
          </button>
        </a>
      </span>
    </div>

    <!-- Preview Image -->
    <!--img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

      <hr-->
      <div class="post-preview-image">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
          } else {
            the_excerpt();
          } ?>
      </div>
  </div>
</div>
