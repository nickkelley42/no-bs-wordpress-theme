<?php
get_header();

if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    // Display post content ?>
    <section>
      <main>
        <?php
          the_title('<h2>', '</h2>');
        ?>
        <p>Posted on <?php the_date(); ?> by <?php the_author(); ?></p>
        <?php
          the_content();
        ?>
      </main>
    </section>
    <?php
  }
} else {
  ?><h2><?php _e( 'No matching posts.', 'textdomain' ); ?></h2><?php
}

get_footer();
