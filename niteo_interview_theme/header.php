<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">

    <title><?php if (is_home()) {echo get_bloginfo('name');} else {wp_title();}?></title>

    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <?php wp_head(); ?>
  </head>

  <body>
    <div class="blog-masthead">
      <div class="container">
        <div class="site-info">
          <?php the_custom_logo(); ?>
          <div class="blog-info">
            <h1 class="site-name"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name');?></a></h1>
            <p class="site-description"><?php echo get_bloginfo('description');?></p>
          </div>
        </div>

        <nav class="blog-nav">
          <?php
          $count_posts = wp_count_posts('page');
          $number_of_menu_items = $count_posts->publish;
          ?>
          <?php if ($number_of_menu_items > 3): ?>
            <div class="dropdown">
              <button id="drop-button" class="btn btn-default dropdown-toggle btn-lg" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span><span class="caret"></span></button>
      
              <?php wp_nav_menu(array(
                'menu'       => 'my_menu_name',
                'menu_class' => 'dropdown-menu',
                'container'  => '',
              ));?>
            </div>
          <?php else: ?>
            <?php wp_nav_menu(); ?>
          <? endif; ?>

        </nav>
      </div>
    </div>
    <div class="container body">