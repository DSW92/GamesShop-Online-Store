<?php get_header(); ?>

  <div id="main_section">

    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );

      endwhile;
    endif;
    ?>

  </div>

<?php get_footer(); ?>
