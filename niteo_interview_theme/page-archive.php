<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="container">
  <div id="content" role="main" class="blog-post">
    <h3>Archives by Month:</h3>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>

    <h3>Archives by Subject:</h3>
    <ul>
      <?php wp_list_categories(); ?>
    </ul>

  </div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>