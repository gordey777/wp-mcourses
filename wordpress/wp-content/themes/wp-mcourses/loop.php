<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php $front__id = (int)(get_option( 'page_on_front' )); ?>


            <?php $post__id = get_the_ID();
            if ( has_post_thumbnail()) {
              $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            } else {
              $image = catchFirstImage();
            }
            $icon = get_field('type_icon'); ?>

            <div class="looper-wrap col-lg-4 col-sm-6">
              <div class="looper-item blog-item<?php the_field('type_color', $termACF);?>">

                <div class="looper-img col-12" data-hkoef=".6" style="background-image: url(<?php echo $image; ?>);"></div>

                <div class="looper-content-wrap col-12">

                  <div class="looper-title"><?php the_title(); ?></div>
                  <div class="looper-content">
                    <div class="looper-post-date"><?php the_time('j F Y'); ?></div>
                    <div class="looper-desc"><?php wpeExcerpt('wpeExcerpt40'); ?></div>
                    <a href="<?php the_permalink(); ?>" class="btn more-link">Подробнее</a>
                  </div>
                </div>
              </div>
            </div>

<?php endwhile; endif; ?>
