<?php
/*
Template Name: Course Page
Template Post Type: post, page
*/
get_header(); ?>
<?php $front__id = (int)(get_option( 'page_on_front' )); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php $post__id = get_the_ID(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <section class="page-title <?php the_field('type_color'); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="container">
      <div class="row page-title-wrap">
        <div class="col-12"><div class="icon" style="background-image: url(<?php the_field('type_icon'); ?>);"></div></div>
        <div class="col-12">
          <div class="title-label">
            <p><?php the_field('type_label'); ?></p>
            <?php $parent = get_ancestors( $post__id, 'page' );
            if(!empty($parent)){ ?>
                <a href="<?php echo get_the_permalink( $parent[0] ); ?>"><?php echo get_the_title( $parent[0] ); ?></a>
            <?php } ?>
          </div>
        </div>
        <h1 class="section-title col-12"><?php the_title(); ?></h1>
        <div class="subtitle col-sm-8 offset-sm-2"><?php the_field('subtitle'); ?></div>
        <div class="courses-properties col-lg-6 offset-lg-3 col-md-8 offset-md-2">

          <div class="course-date <?php the_field('type_color'); ?>">
            <div class="label"><?php the_field('date_label'); ?></div>
            <div class="date"><?php echo __(date_i18n("j F | Y", strtotime(get_sub_field('item_date')))); ?></div>
          </div>
          <div class="course-price <?php the_field('type_color'); ?>">
            <div class="label"><?php the_field('price_label');?></div>
            <div class="value"><?php the_field('price');?></div>
            <div class="units"><?php the_field('price_unit');?></div>
          </div>
          <div class="course-duration <?php the_field('type_color'); ?>">
            <div class="label"><?php the_field('duration_label');?></div>
            <div class="value"><?php the_field('duration');?></div>
            <div class="units"><?php the_field('duration_unit');?></div>
          </div>

          <button class="btn btn-order" data-toggle="modal" data-target="#orderFormModal" data-formtarg="<?php the_title(); ?>"><?php the_field('label_order', $front__id); ?></button>

        </div>
      </div>
    </div>
  </section>

  <section class="content-section">
    <div class="container">
      <div class="row">
         <div class="section-title col-12"><?php the_field('content_title'); ?></div><?php edit_post_link(); ?>

         <div class="text-content col-lg-10 offset-lg-1"><?php the_content(); ?></div>
      </div>
    </div>

  </section>

  <section class="page-advantages" style="background-image: url(<?php echo get_field('adv_img')['url']; ?>);">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6 adv-cont-wrap">
          <div class="adv-cont-title"><?php the_field('adv_title'); ?></div>
          <?php if( have_rows('advanteges') ): ?>
          <?php $i = 0; ?>
            <div class="page-adv-cont">
              <?php while( have_rows('advanteges') ):
                the_row();
                $i++; ?>
                <div class="adv-item">
                  <div class="num"><?php echo $i; ?></div>
                  <div class="cont"><?php the_sub_field('advantege'); ?></div>

                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </section>
  <div class="container bottom-shadow"></div>

  <section class="page-sertificates">
      <div class="container">
        <div class="row">
          <div class="section-title col-12"><?php the_field('sertificates_title'); ?></div>
          <div class="sert-desc col-lg-10 offset-lg-1"><?php the_field('sertificates_desc'); ?></div>
        </div>
        <div class="row">
          <?php
          $sertificates = get_field('sertificates');
          if( $sertificates ): ?>
            <div class="sertif-slider owl-carousel">
              <?php foreach( $sertificates as $image ): ?>
                <div class="sertif-item-wrap">
                  <a href="<?php echo $image['url']; ?>" class="sertif-item" rel="lightbox" style="background-image: url(<?php echo $image['sizes']['medium']; ?>);"></a>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </article>

  <section id="contact-form">
    <div class="container bottom-shadow">
      <div class="row">
          <div class="section-title col-12"><?php the_field('cont_form_title', $front__id);?></div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-6">
          <?php $contform = get_field('home_cont_form', $front__id);?>
          <?php the_field('cont_form_content', $front__id);?>
          <?php echo do_shortcode($contform);?>
        </div>
      </div>
    </div>
  </section>

  <?php endwhile; endif; ?>
  <section id="contacts">
    <div class="container">
      <div class="row">
        <div class="section-title col-12"><?php the_field('contacts_title', $front__id);?></div>

      </div>
    </div>
    <div class="home-contacts--map">
      <?php $location = get_field('contacts_map', $front__id);
      if( !empty($location) ): ?>
        <div class="acf-map">
          <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
      <?php endif; ?>
      <div class="container bottom-shadow">
        <div class="row">
          <div class="col-lg-4 col-md-5">
            <div class="map-contacts">
              <div class="contacts-title"><?php the_field('contacts_list_title', $front__id);?></div>
              <div class="contact-item-wrap phone">
                <div class="contact-label"><?php the_field('header_phone_label', $front__id);?></div>
                <a href="tel:+<?php echo preg_replace("/[^0-9]/", '', get_field('header_phone', $front__id)); ?>" class="contact-item"><?php the_field('header_phone', $front__id);?></a>
              </div>
              <div class="contact-item-wrap address">
                <div class="contact-label"><?php the_field('footer_address_label', $front__id);?></div>
                <div class="contact-item"><?php the_field('footer_address', $front__id);?></div>
              </div>
              <div class="contact-item-wrap schedule">
                <div class="contact-label"><?php the_field('schedule_labe, $front__id', $front__id);?></div>
                <div class="contact-item"><?php the_field('schedule', $front__id);?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.home-contacts--map -->
  </section>

<?php get_footer(); ?>
