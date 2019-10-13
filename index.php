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
        <p><?php the_date(); ?></p>
        <p>Posted by <?php the_author(); ?></p>
        <?php
          the_content();
        ?>
      </main>
    </section>
    <?php
  }
}

get_footer();
