<?php
/*
Template Name: Team Page
Template Post Type: page
*/
get_header(); ?>
<?php $front__id = (int)(get_option( 'page_on_front' )); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php $post__id = get_the_ID(); ?>

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
  <?php if( have_rows('team_list') ):
    $i = 0; ?>
    <section id="team">
      <div class="container bottom-shadow">
        <div class="row team-list">
          <?php while( have_rows('team_list') ):
            the_row();
            $img = get_sub_field('img');
            if($i == 0 || $i == 1){
              $wrapStyle = 'col-md-6 text-lg-left';
              $contStyle = 'col-lg-6';
            } else{
              $wrapStyle = 'col-lg-3 col-md-4';
              $contStyle = 'col-12';
            } ?>
            <div class="<?php echo $wrapStyle; ?> col-sm-6 team-item-wrap">
              <div class="row team-item" style="background: <?php the_sub_field('color'); ?>;">
                <div class="<?php echo $contStyle; ?> team-img ratio" data-hkoef='1.5' style="background-image: url(<?php echo $img['sizes']['medium']; ?>);"></div>
                <div class="<?php echo $contStyle; ?> team-cont">
                  <div class="team-name"><?php the_sub_field('name'); ?></div>
                  <div class="team-sename"><div class="neme-decor"><?php the_sub_field('sename'); ?></div></div>
                  <div class="team-desc"><?php the_sub_field('desc'); ?></div>
                </div>
              </div>
            </div>
          <?php $i++;
          endwhile; ?>
          <div class="team-quote col-lg-6">
            <blockquote><?php the_field('team_quote'); ?></blockquote>
            <div class="tq-autor"><?php the_field('team_quote_autor'); ?></div>
            <div class="tq-desc"><?php the_field('tqa_desc'); ?></div>
          </div>

        </div>
      </div>
    </section>
  <?php endif; ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>












