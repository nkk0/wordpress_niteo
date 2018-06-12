<div class="blog-post">
  <h2 class="blog-page-title">
    <?php the_title(); ?>
  </h2>

  <?php the_content(); ?>
  <?php if (get_the_tags()) {the_tags();} ?>

</div><!-- /.blog-post -->