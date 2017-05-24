<section class="footer clear">
    <div class="col-md-12 content footer-content" style="height:300px;background-image: url('<?php echo get_template_directory_uri() . "/assets/images/home/footer-min.png"; ?>');background-size: cover;background-position: center;">
        <br/>
        <div style="height: 145px;margin-top: 35px;">
            <div class="center">
                <a href="#" class="more-button">LEARN MORE</a>
            </div>
        </div>
        <br/>
        <div class="col-md-12 no-space">
            <div class="container">
                <div class="col-sm-12 col-md-9 left footer-copyright c-section">
                    <p class="" style="color: white;font-weight: 400;font-size: 15px;">Copyright © 2017 Home Contractors -  All rights reserved. Disclaimer</p>
                </div>
                <div class="col-sm-12 col-md-3 right footer-copyright social-section" style="position: relative;bottom: 5px;">
                    <div class="col-md-3 left no-space social-mobile"> 
                        <a href="#"><img style="width: 100%;height: 100%;max-height: 38px;max-width: 38px;"; src="<?php echo get_template_directory_uri() . "/assets/images/footer/facebook-icon-min.png"; ?>"></a>
                    </div>
                    <div class="col-md-3 left no-space social-mobile"> 
                        <a href="#"><img style="width: 100%;height: 100%;max-height: 38px;max-width: 38px;" src="<?php echo get_template_directory_uri() . "/assets/images/footer/twitter-icon-min.png"; ?>"></a>
                    </div>
                    <div class="col-md-3 left no-space social-mobile"> 
                        <a href="#"><img style="width: 100%;height: 100%;max-height: 38px;max-width: 38px;" src="<?php echo get_template_directory_uri() . "/assets/images/footer/linkedin-icon-min.png"; ?>"></a>
                    </div>
                    <div class="col-md-3 left no-space social-mobile"> 
                        <a href="#"><img style="width: 100%;height: 100%;max-height: 38px;max-width: 38px;" src="<?php echo get_template_directory_uri() . "/assets/images/footer/google-icon-min.png"; ?>"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php wp_footer();?>
<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.js"></script>
<script>
  $(document).ready(function() {
    $('.owl-1').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      margin: 10,
      autoHeight: false
    });
  })
</script>
</body>
</html>