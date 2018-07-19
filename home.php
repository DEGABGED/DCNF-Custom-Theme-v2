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
<div class="row">
<!--?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part( 'content', get_post_format() );
endwhile; endif;
?-->

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array( 'post_type' => 'post', 'posts_per_page' => 4, 'paged' => $paged );
$wp_query = new WP_Query($args);
while ( have_posts() ) : the_post(); 
  get_template_part( 'preview', get_post_format() );
endwhile; ?>
</div>

<!-- then the pagination links -->
<?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>
<?php previous_posts_link( 'Newer posts &rarr;' ); ?>
</div>

<?php get_footer(); ?>
