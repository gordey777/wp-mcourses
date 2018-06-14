<?php /* Template Name: Home Page */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section id="home_content" class="home-content">
    <div class="container">
      <div class="row">
        <article id="post-<?php the_ID(); ?>" <?php post_class('col-12'); ?>><?php the_content(); ?><?php edit_post_link(); ?></article>
      </div>
<?php if( have_rows('repeater_field_name') ): ?>


<div class="row courses-wrap">
  <?php $i = 0; ?>
  <?php while( have_rows('repeater_field_name') ): the_row();

    $image = get_sub_field('image');
    $icon = get_sub_field('icon'); ?>

    <?php the_sub_field('');?>
    <?php if($i == 0):?>

        <div class="courses-first course-item <?php the_sub_field('color_style');?>">

          <div class="course-img ratio col-lg-7 col-sm-6" data-hcoef=".8"></div>

          <div class="course-content col-lg-5 col-sm-6">
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




    <?php else: ?>
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
      </div>
    <?php endif;?>

    <?php ;?>




  <?php $i++; ?>
  <?php endwhile; ?>
</div>


<?php endif; ?>




      <div class="courses-beginer">
        <div class="row">
          <div class="course-img col-lg-7 col-sm-6"></div>
          <div class="course-content col-lg-5 col-sm-6">

          </div>
        </div>
      </div>
      <div class="courses-beginer">
        <div class="row">
          <div class="course-img col-lg-7 col-sm-6"></div>
          <div class="course-content col-lg-5 col-sm-6">

          </div>
        </div>
      </div>
    </div>






  </section>
  <section id="home_schedule" class="schedule">

  </section>
  <section id="home_schedule" class="schedule">

  </section>
  <section id="home_schedule" class="schedule">

  </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
