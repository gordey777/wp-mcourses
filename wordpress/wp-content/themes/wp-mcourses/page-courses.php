<?php
/*
Template Name: Courses List Page
Template Post Type: page
*/
get_header(); ?>
<?php $front__id = (int)(get_option( 'page_on_front' )); ?>
<?php $post__id = get_the_ID(); ?>

  <div class="container">
    <div class="row"><?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('single-page col-12'); ?>>
        <div class="row">
           <h1 class="section-title col-12"><?php the_title(); ?></h1><?php edit_post_link(); ?>

           <div class="text-content col-12"><?php the_content(); ?></div>
        </div>
      </article><?php endwhile; endif; ?>
    </div>
    <?php $masArgs = array(
        'post_type' => 'any',
        'posts_per_page' => -1,
        'numberposts' => -1,
        'post_status'  => 'publish',
        'meta_key' => '_wp_page_template',
        'meta_value' => 'single-course.php',
    );

    $massages = new WP_Query( $masArgs );

    if ( $massages->have_posts() ): ?>
      <div class="row">
        <?php while ( $massages->have_posts() ):
          $massages->the_post();
          $post__id = get_the_ID();
              if ( has_post_thumbnail()) {
                $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
              } else {
                $image = catchFirstImage();
              }
              $icon = get_field('type_icon'); ?>

              <div class="looper-wrap col-lg-4 col-sm-6">
                <div class="looper-item <?php the_field('type_color', $termACF);?>">

                  <div class="looper-img col-12" data-hkoef=".6" style="background-image: url(<?php echo $image; ?>);"></div>

                  <div class="looper-content-wrap col-12">

                    <div class="looper-title"><?php the_title(); ?></div>
                    <div class="looper-content">
                      <button class="btn btn-order" data-toggle="modal" data-target="#orderFormModal" data-formtarg="<?php the_title(); ?>"><?php the_field('label_order', $front__id); ?></button>
                      <a href="<?php the_permalink(); ?>" class="btn more-link"><?php the_field('label_more', $front__id); ?></a>
                    </div>
                  </div>
                </div>
              </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      </div>
    <?php endif; ?>
  </div>
<?php get_footer(); ?>
