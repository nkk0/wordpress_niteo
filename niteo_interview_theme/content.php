<div class="blog-post<?php if (($wp_query->current_post + 1) != ($wp_query -> post_count)) {echo ' not-last-post';} ?>">
  <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

 <?php echo themeprefix_first_paragraph(); ?>
 <a href="<?php the_permalink(); ?>" class="read-more">READ MORE</a>

</div>