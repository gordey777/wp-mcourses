<?php
//Template Name: Reviews
get_header();
$pageID = get_the_ID();
?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div class="container">
    <div class="row">
      <article id="post-<?php the_ID(); ?>" <?php post_class('single-page col-12'); ?>>
        <div class="row">
           <h1 class="section-title col-12"><?php the_title(); ?></h1><?php edit_post_link(); ?>

           <div class="text-content col-12"><?php the_content(); ?></div>
        </div>
      </article>
    </div>
  </div>
<?php endwhile; endif; ?>
<?php
$args = array(
    'post_type'     => 'review',
    'posts_per_page'  => 20,
    'paged'             => get_query_var( 'paged' ),
    'post_status'       => 'publish',
    'orderby'     => 'date',
    'order'       => 'DESC'
);
$wp_query = new WP_Query( $args );
?>
<div class="reviews">
    <div class="container">
      <div class="col-sm-10 offset-sm-1">
        <?php while ( $wp_query->have_posts() ) :
          $wp_query->the_post();
          if ( has_post_thumbnail()) {
            $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
          } else {
            $image = catchFirstImage();
          }
          ?>

          <div class="review-list__item row">
            <div class="col-sm-2">
              <div class="review-item-image ratio" data-hkoef="1" style="background-image:url('<?php echo $image; ?>');"></div>
            </div>
            <div class="col-sm-10">
              <b><?php echo get_the_title(); ?><span><?php the_time('j F Y'); ?></span></b>
              <?php the_content(); ?>
            </div>
          </div>
        <?php
        endwhile;
        wp_reset_query();
        ?>

      </div>
    </div>
</div>






<div class="add-review__block">
    <div class="container review-add">
      <div class="row">
        <div class="col-12 review-title"><?php pll_e('ДОДАТИ ВІДГУК'); ?></div>

<div id="rev_wrap" class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
  <div class="form-message"><?php pll_e('ВІДГУК УСПІШНО ДОДАНИЙ'); ?><br><br><?php pll_e('ПОВІДОМЛЕННЯ ПРО УСПІШНИЙ ВІДГУК'); ?><br></div>
        <form id="commentform" class="row form-wrap" enctype="multipart/form-data">
            <div class="col-md-5">
              <label for="input-img" class="input-img"><?php pll_e('ВНЕСІТЬ ЗОБРАЖЕННЯ'); ?>
              <input type='file' id="input-img" name="input_img"  accept="image/x-png,image/gif,image/jpeg" ></label><span id="file_error"></span>
              <div class="input-wrap name-wrap"><input type="text" required class="name-input" id="review-name" name="review-name" placeholder="<?php pll_e('ВНЕСІТЬ НАЗВУ'); ?>"></div>
            </div>
            <div class="col-md-7">
              <div class="input-wrap text-wrap"><textarea required rows="5" id="review-comment" name="review-comment" placeholder="<?php pll_e('ВНЕСІТЬ ТЕКСТ'); ?>"></textarea></div>
            </div>

            <div class="col-12 submit-wrap">
              <input id="review-submit" type="submit" name="send_data" value="<?php pll_e('ДОДАТИ ВІДГУК'); ?>" class="btn btn-violet">
            </div>

        </form>
</div>
      </div>
    </div>
</div>
<?php get_footer();?>


