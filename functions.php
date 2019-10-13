<?php

// make wordpress supply the title-tag
add_theme_support( 'title-tag' );

// Remove as much of the wp_head bullshit as possible while
// still keeping it useful.
function clear_styles_and_scripts() {
  global $wp_scripts;
  global $wp_styles;
  $styles_to_keep = array(
//    "wp-admin",
//    "admin-bar",
//    "dashicons",
//    "open-sans"
  );
  
  foreach( $wp_styles ->queue as $handle ) {
    if ( in_array($handle, $styles_to_keep) ) continue;
    wp_dequeue_style( $handle );
    wp_deregister_style( $handle );
  
  }
}
add_action( 'wp_enqueue_scripts', 'clear_styles_and_scripts', 100 );
