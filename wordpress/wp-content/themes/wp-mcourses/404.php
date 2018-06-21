<?php get_header(); ?>

<div class="container">
  <div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class('single-page col-lg-8'); ?>>
    <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
    <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>


    </article>

    <?php get_sidebar(); ?>

  </div>
</div>




<?php get_footer(); ?>

