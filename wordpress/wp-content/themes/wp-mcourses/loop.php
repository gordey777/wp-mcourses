<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php $front__id = (int)(get_option( 'page_on_front' )); ?>
         <?php //get_page_template_slug( get_the_ID() );?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>

    <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail()) { ?>
        <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php } else { ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php } ?>
    </a><!-- /post thumbnail -->

    <h2 class="inner-title">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h2><!-- /post title -->

    <span class="date"><?php the_time('j F Y'); ?> <span><?php the_time('G:i'); ?></span></span>
    <span class="author"><?php _e( 'Published by', 'wpeasy' ); ?> <?php the_author_posts_link(); ?></span>
    <span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'wpeasy' ), __( '1 Comment', 'wpeasy' ), __( '% Comments', 'wpeasy' )); ?></span><!-- /post details -->


    <?php wpeExcerpt('wpeExcerpt40'); ?>
<?php

$dateformatstring = "d F Y";
$unixtimestamp = strtotime(get_field('date'));

echo date_i18n($dateformatstring, $unixtimestamp);

?>
  </div><!-- /looper -->

<?php if ( has_post_thumbnail()) {
  $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
} else {
  $image = catchFirstImage();
} ?>
    <?php the_field('type_label');?>
    <?php the_field('course_type');?>
    <?php the_field('type_color');?>
    <?php the_field('price_label');?>
    <?php the_field('price');?>
    <?php the_field('price_unit');?>
    <?php the_field('duration_label');?>
    <?php the_field('duration');?>
    <?php the_field('duration_unit');?>
    <?php the_field('date_label');?>
    <?php //the_sub_field('');?>




<?php endwhile; endif; ?>
