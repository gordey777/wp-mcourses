<?php /* Template Name: Home Page */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>



<section id="introduction">
  <div class="container">
    <div class="row int-content">
        <div class="int-title col-12"><?php the_field('home_courses_title');?></div>
        <div class="int-desc col-lg-8 offset-lg-2"><?php the_field('home_courses_desc');?></div>
        <div class="int-small-desc col-lg-10 offset-lg-1"><?php the_field('home_courses_small_desc');?></div>
    </div>




  <?php $courseList = get_field('home_courses_list');

  if( $courseList ): ?>

    <?php $i = 0; ?>
    <div class="row courses-wrap">
    <?php foreach( $courseList as $post):
      setup_postdata($post);
      $post__id = get_the_ID();
      if ( has_post_thumbnail()) {
        $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
      } else {
        $image = catchFirstImage();
      }
      $icon = get_field('type_icon'); ?>


      <?php if($i == 0): ?>
        <div class="course-item-wrap first-item col-12">
          <div class="courses-first course-item row <?php the_field('type_color');?>">


              <div class="course-img col-lg-7 col-md-6 ratio" data-hkoef=".8" style="background-image: url(<?php echo $image; ?>);"></div>

              <div class="course-content-wrap  col-lg-5 col-md-6">

                <div class="course-title">
                  <div class="course-icon" style="background-image: url(<?php echo $icon; ?>);"></div>
                  <div class="course-label"><?php the_field('type_label');?></div>
                  <div class="course-type"><?php if(get_field('alt_tittle')){ the_field('alt_tittle'); } else { the_title(); }; ?></div>
                </div>
                <div class="course-content">
                  <div class="course-desc"><?php wpeExcerpt('wpeExcerpt40'); ?></div>
                  <div class="course-content-bottom">
                    <div class="course-price">
                      <div class="label"><?php the_field('price_label');?></div>
                      <div class="value"><?php the_field('price');?></div>
                      <div class="units"><?php the_field('price_unit');?></div>
                    </div>
                    <div class="course-duration">
                      <div class="label"><?php the_field('duration_label');?></div>
                      <div class="value"><?php the_field('duration');?></div>
                      <div class="units"><?php the_field('duration_unit');?></div>
                    </div>
                    <button class="btn">Записатся</button>
                    <a href="<?php the_permalink(); ?>" class="btn more-link">Подробнее</a>
                  </div>
                </div>
              </div>

          </div>
        </div>
        <div class="clearfix"></div>

        <?php else: ?>
          <div class="course-item-wrap col-sm-6">
            <div class="course-item <?php the_field('type_color', $termACF);?>">

              <div class="course-img col-12 ratio" data-hkoef=".6" style="background-image: url(<?php echo $image; ?>);"></div>

              <div class="course-content-wrap col-md-10 offset-md-1">

                <div class="course-title">
                  <div class="course-icon" style="background-image: url(<?php echo $icon; ?>);"></div>
                  <div class="course-label"><?php the_field('type_label');?></div>
                  <div class="course-type"><?php if(get_field('alt_tittle')){ the_field('alt_tittle'); } else { the_title(); }; ?></div>
                </div>
                <div class="course-content">
                  <div class="course-desc"><?php wpeExcerpt('wpeExcerpt40'); ?></div>
                  <div class="course-content-bottom">
                    <div class="course-price">
                      <div class="label"><?php the_field('price_label');?></div>
                      <div class="value"><?php the_field('price');?></div>
                      <div class="units"><?php the_field('price_unit');?></div>
                    </div>
                    <div class="course-duration">
                      <div class="label"><?php the_field('duration_label');?></div>
                      <div class="value"><?php the_field('duration');?></div>
                      <div class="units"><?php the_field('duration_unit');?></div>
                    </div>
                    <button class="btn">Записатся</button>
                    <a href="<?php the_permalink(); ?>" class="btn more-link">Подробнее</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php endif;?>

        <?php $i++; ?>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  <?php endif; ?>
  </div>
</section>


<?php if( have_rows('home_calendar') ): ?>
<section id="calendar">
  <div class="container">
    <div class="row">
      <div class="section-title col-12"><?php the_field('home_calendar_title'); ?></div>
    </div>

    <div class="cal-tab-nav row">
      <?php $i = 0; ?>
      <?php while( have_rows('home_calendar') ):
        the_row();
        $i++;
        $icon = get_sub_field('type_icon');
        if($i == 1){
          $activeClass = 'active';

        }else{
          $activeClass = '';
        }
        ?>
        <a href="#tab-<?php echo $i; ?>" class="tab-nav-item col-4 <?php echo $activeClass; ?> <?php the_sub_field('type_color'); ?>">
          <div class="icon" style="background-image: url(<?php echo $icon; ?>);"></div>
          <div class="label"><?php the_sub_field('title_label'); ?></div>
          <div class="title"><?php the_sub_field('title'); ?></div>
          <div class="days">
          <?php $days = get_sub_field('days');
            if( $days ): ?>
              <?php foreach( $days as $day ): ?>
                <span><?php echo __($day); ?></span>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </a>
      <?php endwhile; ?>
    </div>
    <div class="row cal-tabs">

        <?php $k = 0; ?>
        <?php while( have_rows('home_calendar') ):
          the_row();
          $k++;
          $colorClass = get_sub_field('type_color');
          if($k == 1){
            $activeClass = 'active';

          }else{
            $activeClass = '';
          }
          ?>
          <div id="tab-<?php echo $k; ?>" class="tab-item tab-item-slider col-12 owl-carousel <?php echo $activeClass; ?>">
            <?php if( have_rows('calendar_list') ): ?>
              <?php while( have_rows('calendar_list') ):
                the_row();
                $icon = get_sub_field('type_icon');

                $listItem = get_sub_field('item_page'); ?>

                  <?php if( $masageList && get_sub_field('item_type')): ?>
                    <?php foreach( $listItem as $post): ?>

                      <?php setup_postdata($post);
                      $post__id = get_the_ID();
                      if ( has_post_thumbnail()) {
                        $bg = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                      } else {
                        $bg = catchFirstImage();
                      } ?>

                      <div class="calendar-list-item <?php echo $colorClass; ?>" style="background-image: url(<?php echo $bg; ?>);">
                        <div class="date-wrap">
                          <div class="year"><?php echo date_i18n("Y", strtotime(get_field('date'))); ?></div>
                          <div class="date"><?php echo date_i18n("d.m", strtotime(get_field('date'))); ?></div>
                          <div class="day"><?php echo __(date_i18n("l", strtotime(get_field('date')))); ?></div>
                        </div>
                        <div class="label"><?php the_field('date_label'); ?></div>
                        <div class="title"><?php the_title(); ?></div>
                      </div>

                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>

                  <?php else:

                    $bg = get_sub_field('item_img')['sizes']['medium']; ?>
                    <div class="calendar-list-item <?php echo $colorClass; ?>" style="background-image: url(<?php echo $bg; ?>);">
                      <div class="date-wrap">
                        <div class="year"><?php echo date_i18n("Y", strtotime(get_sub_field('item_date'))); ?></div>
                        <div class="date"><?php echo date_i18n("d.m", strtotime(get_sub_field('item_date'))); ?></div>
                        <div class="day"><?php echo __(date_i18n("l", strtotime(get_sub_field('item_date')))); ?></div>
                      </div>
                      <div class="label"><?php the_sub_field('item_label'); ?></div>
                      <div class="title"><?php the_sub_field('item_title'); ?></div>
                    </div>

                  <?php endif; ?>

                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>

      </div>

    </div>
  </section>
<?php endif; ?>

<div class="container bottom-shadow"></div>




  <section id="about">
    <div class="container">
      <div class="row">
        <div class="section-title col-12"><?php the_field('about_title'); ?></div>
        <div class="page-content col-lg-8 offset-lg-2 col-md-10 offset-md-1">
          <?php the_field('about_content'); ?>
          <?php if( have_rows('about_adv') ): ?>
            <div class="about-adv row">
              <?php while( have_rows('about_adv') ):
                the_row();
                $icon = get_sub_field('icon'); ?>
              <div class="about-adv-item col-sm-4">
                <div class="icon" style="background-image: url(<?php echo $icon; ?>);"></div>
                <div class="title"><?php the_sub_field('title'); ?></div>
                <div class="desc"><?php the_sub_field('desc'); ?></div>
              </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <?php if( have_rows('about_slider') ): ?>
        <div class="row about-advantages-wrap">
          <div class="owl-carousel about-slider about-advantages col-lg-5 offset-lg-7 col-md-6 offset-md-6 col-sm-8 offset-sm-4">
            <?php while( have_rows('about_slider') ):
              the_row();
              $icon = get_sub_field('icon'); ?>
              <div class="about-advantages-item">
                <div class="icon" style="background-image: url(<?php echo $icon; ?>);"></div>
                <div class="title"><?php the_sub_field('title'); ?></div>
                <div class="desc"><?php the_sub_field('desc'); ?></div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </section>


<section id="">
<div class="container">
<?php the_field('home_masages_list_title');?>
<?php the_field('home_masages_list_subitle');?>

<?php $masageList = get_field('home_masages_list');
if( $masageList ): ?>
  <div class="row courses-wrap">
      <?php foreach( $courseList as $post): ?>
      <?php setup_postdata($post);


      $image = get_sub_field('image');
      $icon = get_sub_field('icon'); ?>

      <?php //the_sub_field('');?>



    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
  </div>
<?php endif; ?>
</div>
</section>

  <section id="home_content" class="home-content">

<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
  <div class="row">

<div class="content-title col-12">
  <?php the_field('home_content_title');?></div>

  <div class="col-md-6"><?php the_content(); ?><?php edit_post_link(); ?>
  </div>
  <div class="col-md-6">
  <div class="home-video--item  ratio" data-hkoef=".55">
    <?php $front_video = get_field('home_content_video'); ?>


    <?php //echo $front_video["iframe"]; ?>
    <div class="videoholder" data-video="<?php echo $front_video['vid']; ?>" style="background-image: url(<?php echo $front_video['thumbs']['maximum']["url"]; ?>);">
      <div class="video-title"><?php echo $front_video["title"]; ?></div>
    </div>
  </div>

    <?php the_field('header_slogan');?>
  </div>
  </div>
</article>
<?php endwhile; endif; ?>

<?php $contform = get_field('home_cont_form');?>

  </section>



  <section id="home_schedule" class="schedule">

  </section>
  <section id="home_schedule" class="schedule">

  </section>
  <section id="kontacts" class="schedule">

  <div class="home-contacts--map col-12">
    <?php $location = get_field('contacts_map');
    if( !empty($location) ): ?>
    <div class="map-contacts">
      <div class="contact-item-wrap">
        <div class="contact-label"><?php the_field('header_phone_label');?></div>
        <div class="contact-item"><?php the_field('header_phone');?></div>
      </div>
      <div class="contact-item-wrap">
        <div class="contact-label"><?php the_field('footer_address_label');?></div>
        <div class="contact-item"><?php the_field('footer_address');?></div>
      </div>
      <div class="contact-item-wrap">
        <div class="contact-label"><?php the_field('schedule_label');?></div>
        <div class="contact-item"><?php the_field('schedule');?></div>
      </div>
    </div>

    <div class="acf-map">
      <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
    </div>

  </div><!-- /.home-contacts--map -->
  </section>
    <?php endif; ?>
<?php get_footer(); ?>
