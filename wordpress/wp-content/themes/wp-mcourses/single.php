<?php get_header(); ?>

<?php $front__id = (int)(get_option( 'page_on_front' )); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php $post__id = get_the_ID(); ?>


<div class="container">
  <div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class('single-page col-lg-8'); ?>>
      <div class="row">
         <h1 class="section-title col-12"><?php the_title(); ?></h1><?php edit_post_link(); ?>

         <div class="text-content col-12"><?php the_content(); ?></div>
      </div>


    </article>

    <?php get_sidebar(); ?>

  </div>
</div>
  <?php endwhile; endif; ?>



<?php get_footer(); ?>

