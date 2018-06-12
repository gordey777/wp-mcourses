<?php /* Template Name: Home Page */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section id="home_content" class="home-content">
    <div class="container">
      <div class="row">
        <article id="post-<?php the_ID(); ?>" <?php post_class('col-12'); ?>><?php the_content(); ?><?php edit_post_link(); ?></article>
      </div>
      <div class="courses-beginer col-12">
        <div class="row">
          <div class="course-img col-lg-7 col-sm-6"></div>
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
            <button class="btn btn-green">Записатся</button>
            <a href="" class="more-link">Подробнее</a>
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
