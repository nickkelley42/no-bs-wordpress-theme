<?php
get_header();

if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    // Display post content ?>
    <section>
      <main>
        <h2><?php the_title(); ?></h2><?php
        the_content(); ?>
      </main>
    </section>
    <?php
  }
}

get_footer();
