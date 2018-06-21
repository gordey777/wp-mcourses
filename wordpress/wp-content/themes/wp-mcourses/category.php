<?php get_header(); ?>


  <?php $post__id = get_the_ID(); ?>

    <div class="container">
      <div class="row">
        <article class="single-page col-12">
          <div class="row">
             <h1 class="section-title col-12"><?php the_title(); ?></h1>

             <div class="text-content col-12"><?php the_content(); ?></div>
          </div>
        </article>
      </div>
      <div class="row">
            <?php get_template_part('loop'); ?>
          <?php get_template_part('pagination'); ?>
      </div>

    </div>


<?php get_footer(); ?>
