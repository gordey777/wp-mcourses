<?php get_header(); ?>
<?php $front__id = (int)(get_option( 'page_on_front' )); ?>
  <article>

    <h1 class="cat-title inner-title"><?php the_category(', '); ?></h1>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>

  </article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
  <?php /*if( $courseList ):
     $i = 0;

    foreach( $courseList as $term):

      $term__id = $term->term_id;
      $termACF = 'term_' . $term__id;
      $catImage = get_field('category_img', $termACF);
      if (get_field('course_type', $termACF)){
        $catTitle = get_field('course_type', $termACF);
      } else {
        $catTitle = $term->name;
      }
      $icon = get_field('type_icon', $termACF);*/ ?>
