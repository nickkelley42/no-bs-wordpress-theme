<?php
get_header();

if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    // Display post content ?>
    <section>
      <main>
        <?php
          if ( is_singular() ) {
            the_title("<h2>", "</h2>");
          else {
            the_title( sprintf(
              '<h2><a href="%s">',
              esc_url( get_permalink()
            ) ), '</a></h2>' );
          }
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
