<?php
get_header();
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        // Display post content ?>
        <h2><?php the_title(); ?></h2><?php
        the_content();
    endwhile;
endif;
get_footer();
