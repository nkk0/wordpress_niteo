<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo('description');?>">
    <meta name="author" content="<?php echo get_bloginfo('name');?>">

    <title><?php if (is_singular()) {the_title();} else {echo get_bloginfo('name') . ' – ' . get_bloginfo('description');}?></title>

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
          <?php wp_list_pages('&title_li='); ?>
        </nav>
      </div>
    </div>

    <div class="container body">