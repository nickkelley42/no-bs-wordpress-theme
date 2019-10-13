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
          $author = the_author();
          echo "<p>Posted by $author</p>";
          the_content();
        ?>
      </main>
    </section>
    <?php
  }
}

get_footer();
