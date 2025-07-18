<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  
  <?php get_header(); ?>

  <main class="kinola-content">
    <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          the_content();
        endwhile;
      else:
        echo '<div>No content found</div>';
      endif;
    ?>
  </main>

  <?php get_footer(); ?>
  
  <?php wp_footer(); ?>
</body>
</html>
