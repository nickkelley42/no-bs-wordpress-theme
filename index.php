<?php
get_header();
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    // Display post content ?>
    <article>
      <h2><?php the_title(); ?></h2><?php
      the_content(); ?>
    </article><?php
  endwhile;
endif;
get_footer();
