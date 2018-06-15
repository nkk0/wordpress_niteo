<div class="blog-post">
  <h2 class="blog-page-title">
    <?php the_title(); ?>
  </h2>

  <p>
    <?php the_content(); ?>
    <br/>
    <?php if (get_the_tags()) {the_tags();} ?>
  </p>

</div><!-- /.blog-post -->
