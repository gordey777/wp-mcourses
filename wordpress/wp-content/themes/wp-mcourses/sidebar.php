<?php $front__id = (int)(get_option( 'page_on_front' )); ?>
    <?php $masageList = get_field('home_masages_list', $front__id);
    if( $masageList ): ?>
      <aside class="col-lg-4">
        <div class="container">
          <div class="row">
            <div class="col-12"><div class="sidebar-title"><?php the_field('home_masages_list_title', $front__id);?></div></div>
          </div>
          <div class="row courses-list">
            <?php foreach($masageList as $post): ?>
              <?php setup_postdata($post);

                $post__id = get_the_ID();
                if ( has_post_thumbnail()) {
                  $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                } else {
                  $image = catchFirstImage();
                }
                $icon = get_field('type_icon'); ?>

                <div class="looper-wrap col-lg-12 col-sm-6">
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
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <div class="more-btn-wrap">
            <?php $massages_id = get_field('home_masages_link', $front__id) ;?>
            <a href="<?php echo get_the_permalink( $massages_id ); ?>" class="btn btn-violet more-btn"><?php the_field('home_masages_link_label', $front__id);?></a>
          </div>
        </div>
      </aside>
    <?php endif; ?>
