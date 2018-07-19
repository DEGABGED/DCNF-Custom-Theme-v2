<?php get_header(); ?>
<!-- Jumbotron -->
<header class="masthead banner text-center text-white d-flex">
  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <strong>Blog</strong>
          </h1>
      </div>
    </div>
  </div>
</header>

<div id="blog" class="container">
<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();

get_template_part( 'content', get_post_format() );

endwhile; endif; 
?>
</div>
<?php get_footer(); ?>
