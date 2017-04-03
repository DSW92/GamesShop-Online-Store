<?php get_header(); ?>

  <div id="main_section">
		<?php echo do_shortcode('[products orderby="date" order="desc"]'); ?>
  </div>

<?php get_footer(); ?>