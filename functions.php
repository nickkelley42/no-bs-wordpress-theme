<?php

if ( ! function_exists( 'nobs_setup' ) ) {
  function nobs_setup() {
    // make wordpress supply the title-tag
    add_theme_support( 'title-tag' );

    // Menus!
    register_nav_menus( array(
      'top' => __('Top Menu', 'nobs'),
      'bottom' => __('Bottom Menu', 'nobs')
    ) );
  }
}

add_action( 'after_setup_theme', 'nobs_setup' );
