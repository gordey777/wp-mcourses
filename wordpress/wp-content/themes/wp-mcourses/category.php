<?php get_header(); ?>
<?php $front__id = (int)(get_option( 'page_on_front' )); ?>
  <article>

    <h1 class="cat-title inner-title"><?php the_category(', '); ?></h1>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>

  </article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
