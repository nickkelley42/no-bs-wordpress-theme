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
          echo "<p>Posted by ";
          the_author();
          echo "</p>";
          the_content();
        ?>
      </main>
    </section>
    <?php
  }
}

get_footer();
