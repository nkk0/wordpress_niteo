<?php get_header(); ?>

  <div class="row">
    <div class="col-sm-12 blog-main">

      <?php 
        if (have_posts()):
          while (have_posts()):
            the_post();
            get_template_part('content', get_post_format());
          endwhile;
          echo '<div class="pages">' . paginate_links() . '</div>';
        else:
          echo '<div class="blog-post"><h4>There are no posts to display!</h4></div>';
        endif;
      ?>

    </div> <!-- /.blog-main -->
  </div> <!-- /.row -->

<?php get_footer(); ?>