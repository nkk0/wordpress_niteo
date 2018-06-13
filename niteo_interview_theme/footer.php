    </div><!-- /.container body -->
</div><!-- /.container -->

    <footer class="blog-footer">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Name of Widgetized Area") ) : ?>
      <?php endif;?>

      <?php if (! wp_get_sidebars_widgets()['sidebar-1']) : ?>
        <p><?php echo get_bloginfo('name');?> <?php echo date('Y'); ?></p>
        <a href="#">Back to top</a>
      <?php endif;?>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
