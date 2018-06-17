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
    <?php foreach( $courseList as $term):

      $term__id = $term->term_id;
      $termACF = 'term_' . $term__id;
      $catImage = get_field('category_img', $termACF);
      if (get_field('course_type', $termACF)){
        $catTitle = get_field('course_type', $termACF);
      } else {
        $catTitle = $term->name;
      }
      $icon = get_field('type_icon', $termACF); ?>



      <?php if($i == 0): ?>
        <div class="course-item-wrap first-item col-12">
          <div class="courses-first course-item row <?php the_field('type_color', $termACF);?>">


              <div class="course-img col-lg-7 col-md-6 ratio" data-hkoef=".8" style="background-image: url(<?php echo $catImage; ?>);"></div>

              <div class="course-content-wrap  col-lg-5 col-md-6">

                <div class="course-title">
                  <div class="course-icon" style="background-image: url(<?php echo $icon; ?>);"></div>
                  <div class="course-label"><?php the_field('type_label', $termACF);?></div>
                  <div class="course-type"><?php echo $catTitle; ?></div>
                </div>
                <div class="course-content">
                  <div class="course-desc"><?php echo $term->description; ?></div>
                  <div class="course-content-bottom">
                    <div class="course-price">
                      <div class="label"><?php the_field('price_label');?>стоимость</div>
                      <div class="value"><?php the_field('price');?>1500</div>
                      <div class="units"><?php the_field('price_unit');?>грн/мес.</div>
                    </div>
                    <div class="course-duration">
                      <div class="label"><?php the_field('duration_label');?>продолжительность</div>
                      <div class="value"><?php the_field('duration');?>16</div>
                      <div class="units"><?php the_field('duration_unit');?>часов</div>
                    </div>
                    <button class="btn">Записатся</button>
                    <a href="<?php echo get_term_link( $term ); ?>" class="btn more-link">Подробнее</a>
                  </div>
                </div>
              </div>

          </div>
        </div>
        <div class="clearfix"></div>

        <?php else: ?>
          <div class="course-item-wrap col-sm-6">
            <div class="course-item <?php the_field('type_color', $termACF);?>">

              <div class="course-img col-12 ratio" data-hkoef=".8" style="background-image: url(<?php echo $catImage; ?>);"></div>

              <div class="course-content-wrap col-md-10 offset-md-1">

                <div class="course-title">
                  <div class="course-icon" style="background-image: url(<?php echo $icon; ?>);"></div>
                  <div class="course-label"><?php the_field('type_label', $termACF);?></div>
                  <div class="course-type"><?php echo $catTitle; ?></div>
                </div>
                <div class="course-content">
                  <div class="course-desc"><?php echo $term->description; ?></div>
                  <div class="course-content-bottom">
                    <div class="course-price">
                      <div class="label"><?php the_field('price_label');?>стоимость</div>
                      <div class="value"><?php the_field('price');?>1500</div>
                      <div class="units"><?php the_field('price_unit');?>грн/мес.</div>
                    </div>
                    <div class="course-duration">
                      <div class="label"><?php the_field('duration_label');?>продолжительность</div>
                      <div class="value"><?php the_field('duration');?>16</div>
                      <div class="units"><?php the_field('duration_unit');?>часов</div>
                    </div>
                    <button class="btn">Записатся</button>
                    <a href="<?php echo get_term_link( $term ); ?>" class="btn more-link">Подробнее</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php endif;?>

        <?php $i++; ?>
      <?php endforeach; ?>

    </div>
  <?php endif; ?>
  </div>
</section>

<section id="calendar">

  <?php if( have_rows('home_calendar') ): ?>

    <?php the_field('home_calendar_title'); ?>

    <?php $i = 0; ?>
      <?php while( have_rows('home_calendar') ): the_row(); ?>
      <?php the_sub_field('title_label'); ?>
      <?php the_sub_field('title'); ?>
      <?php $i++; ?>
    <?php endwhile; ?>

    <?php $k = 0; ?>
    <?php while( have_rows('home_calendar') ): the_row();

      $calendar_list = get_sub_field('calendar_list'); ?>
      <?php $masageList = get_field('home_masages_list');
      if( $masageList ): ?>
        <?php foreach( $courseList as $post): ?>













          <?php setup_postdata($post);?>


          <?php the_title(); ?>






        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>



      <?php $K++; ?>
    <?php endwhile; ?>


<?php endif; ?>



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

        <div class="course-item col-sm-6 <?php the_sub_field('color_style');?>">

            <div class="course-img ratio" data-hcoef=".8"></div>

            <div class="course-content">
              <div class="course-type">Учебный курс</div>
              <div class="course-title">для начинающих</div>
              <div class="course-content">
                <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. <br>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada.</p>
              </div>
              <div class="course-price">
                <div class="label">
                  Стоимость
                </div>
                <div class="value">
                  3800
                </div>
                <div class="units">
                  грн./мес
                </div>
              </div>
              <div class="course-duration">
                <div class="label">
                  Продолжительность
                </div>
                <div class="value">
                  120
                </div>
                <div class="units">
                  часов
                </div>
              </div>
              <button class="btn">Записатся</button>
              <a href="" class="btn more-link">Подробнее</a>
              <input type="button" class="btn btn-violet">
            </div>
          </div>

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
