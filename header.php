<!doctype html>
<html>
<head <?php language_attributes(); ?>>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>
<body>
<header>
  <h1><?php bloginfo('name'); ?></h1>
  <?php
    $description = get_bloginfo( 'description', 'display' );
    if $description != "" { ?>
      <p><?php echo get_bloginfo( 'description', 'display' ); ?></p>
      <?php
    } ?>
</header>
