<?php
/*
Template Name: Courses Page
Template Post Type: page
*/
get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
  <div class="row"></div>


      <h1 class="page-title inner-title"><?php the_title(); ?></h1><?php edit_post_link(); ?>
      <?php the_content(); ?>



  <div class="row">
  <?php $front__id = (int)(get_option( 'page_on_front' )); ?>

    <?php //get_page_template_slug( get_the_ID() );?>
            <?php $post__id = get_the_ID();
            if ( has_post_thumbnail()) {
              $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            } else {
              $image = catchFirstImage();
            }
            $icon = get_field('type_icon'); ?>

            <div class="looper-wrap col-lg-4 col-sm-6">
              <div class="looper-item <?php the_field('type_color', $termACF);?>">

                <div class="looper-img col-12 ratio" data-hkoef=".6" style="background-image: url(<?php echo $image; ?>);"></div>

                <div class="looper-content-wrap col-12">

                  <div class="looper-title"><?php the_title(); ?></div>
                  <div class="looper-content">
                    <button class="btn">Записатся</button>
                    <a href="<?php the_permalink(); ?>" class="btn more-link">Подробнее</a>
                  </div>
                </div>
              </div>
            </div>

      </div>
    </article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
