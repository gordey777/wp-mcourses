  </div><!-- /wrapper -->
  <?php $front__id = (int)(get_option( 'page_on_front' )); ?>
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-4">
            <div class="row">
              <div class=" col-lg-6 offset-lg-3 footer-slogan-wrap">
                  <div class="logo">
                    <?php if ( !is_front_page() && !is_home() ){ ?>
                      <a href="<?php echo home_url(); ?>">
                    <?php } ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                    <?php if ( !is_front_page() && !is_home() ){ ?>
                      </a>
                    <?php } ?>
                  </div>
                  <div class="header-slogan"><?php the_field('header_slogan', $front__id);?></div>
              </div>
            </div>
            <div class="footer-content"><?php the_field('footer_desc', $front__id);?></div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
            <?php if ( is_active_sidebar('widgetarea1') ) : ?>
              <?php dynamic_sidebar( 'widgetarea1' ); ?>
            <?php endif; ?>

<div class="col-md-6">
  <div class="row">


            <div class="footer-widget col-lg-6">
              <span class="footer-widget--title"><?php the_field('socials_title', $front__id);?></span>

              <?php if( have_rows('socials', $front__id)): ?>
                <div class="socials">
                  <?php while ( have_rows('socials', $front__id) ) : the_row(); ?>
                    <a href="<?php the_sub_field('link'); ?>" class="social-item" title="<?php the_sub_field('title'); ?>" style="background: url(<?php the_sub_field('icon'); ?>) no-repeat center center; background-size: contain;"></a>
                  <?php endwhile; ?>
                </div>
              <?php endif; ?>
            </div>

            <div class="footer-widget col-lg-6">
              <span class="footer-widget--title"><?php the_field('footer_contacts_title', $front__id);?></span>
              <div class="footer-tel">
                <div class="call-wrapp">
                  <button title="Callback" class="btn callback" data-toggle="modal" data-target="#callbackModal"></button>
                </div>
                <a href="tel:+<?php echo preg_replace("/[^0-9]/", '', get_field('header_phone', $front__id)); ?>" class="tel-link"><?php the_field('header_phone', $front__id);?></a>
              </div>
              <div class="footer-address">
                <div class="address-icon"></div>
                <div class="address"><?php the_field('footer_address', $front__id);?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="footer-cop">
        <p class="copyright">&copy; 2017 - <?php echo date("Y"); ?><br><?php the_field('footer_copyright', $front__id);?></p>
    </div>
  </footer><!-- /footer -->

<!-- Modal -->
<div class="modal fade" id="orderFormModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div id="modal_form_body" class="modal-content order-form">
          <?php $contform = get_field('order_form', $front__id);?>
          <?php echo do_shortcode($contform);?>
    </div>
  </div>
</div>
<div class="modal fade" id="callbackModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div id="modal_form_body" class="modal-content order-form">
          <?php $contform = get_field('callback_form', $front__id);?>
          <?php echo do_shortcode($contform);?>
    </div>
  </div>
</div>



  <script>
    var frontid = <?php echo $front__id; ?>;
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZF31krTQH_5QnEpdIsEgmsBV-Iy884rE"></script>
  <?php wp_footer(); ?>

</body>
</html>
