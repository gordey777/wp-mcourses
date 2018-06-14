  </div><!-- /wrapper -->
  <?php $front__id = (int)(get_option( 'page_on_front' )); ?>
  <footer>
    <div class="container footer-top">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-4">
          <div class="row">
              <div class="logo col-1 offset-3">
                <?php if ( !is_front_page() && !is_home() ){ ?>
                  <a href="<?php echo home_url(); ?>">
                <?php } ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                <?php if ( !is_front_page() && !is_home() ){ ?>
                  </a>
                <?php } ?>
              </div>
              <div class="header-slogan col-5"><?php the_field('header_slogan', $front__id);?></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container footer-bottom">
      <div class="row">
          <?php if ( is_active_sidebar('widgetarea1') ) : ?>
            <?php dynamic_sidebar( 'widgetarea1' ); ?>
          <?php endif; ?>


        <div class="footer-widget col-md-3 col-sm-4 col-6">
          <span class="footer-widget--title"><?php the_field('socials_title', $front__id);?></span>

          <?php if( have_rows('socials', $front__id) && $i == 1): ?>
            <div class="socials">
              <?php while ( have_rows('footer_socials', $front__id) ) : the_row(); ?>
                <a href="<?php the_sub_field('link'); ?>" class="social-item fa <?php the_sub_field('icon'); ?>" title="<?php the_sub_field('title'); ?>"></a>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>

        </div>


        <div class="footer-widget col-md-3 col-sm-4 col-6">
          <span class="footer-widget--title"><?php the_field('footer_contacts_title', $front__id);?></span>
          <div class="footer-tel">
            <div class="call-wrapp col-3">
              <button title="Callback" class="btn callback"></button>
            </div>
            <a href="tel:+<?php echo preg_replace("/[^0-9]/", '', get_field('header_phone', $front__id)); ?>" class="tel-link col-9"><?php the_field('header_phone', $front__id);?></a>
          </div>
          <div class="footer-addres">
            <div class="addres-icon col-3"></div>
            <div class="addres col-9"><?php the_field('footer_address', $front__id);?></div>
          </div>
        </div>




      </div>
    </div>

    <div class="container footer-cop">
      <p class="copyright">
        &copy; 2017 - <?php echo date("Y"); ?><br><?php the_field('copyright'); ?>copyright
      </p><!-- /copyright -->
    </div>
  </footer><!-- /footer -->

  <?php wp_footer(); ?>

</body>
</html>
