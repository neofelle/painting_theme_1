<?php
/**
Template Name: Homepage
 */
?>
<?php get_header(); ?>
<section class="slider bg-black clear">
    <div class="large-12 columns">
      <div class="owl-carousel owl-1 owl-theme">
        <?php 
            $slider_data = $wpdb->get_results("SELECT  meta_value FROM wp_postmeta WHERE post_id =32 AND meta_key ='nivo_settings' LIMIT 1"); 
            $slider_settings   = unserialize($slider_data[0]->meta_value);
            $slider_images_ids = $slider_settings['manual_image_ids'];
            $slider_images     = $wpdb->get_results("SELECT  guid, post_excerpt FROM wp_posts WHERE id IN(" . $slider_images_ids . ")");                
        ?>
        <?php foreach( $slider_images as $i ){ ?>
            <div class="item slider-bg" style="height:650px;display: block;background-image: url('<?php echo $i->guid; ?>');background-size: cover;background-position: center;">
                <div class="container owl-slider  sl-1">
                    <h1 class="slider-h1">LOREM IPSUM</h1>
                    <h1 class="slider-h1">DOLOR SIT AMET</h1>
                    <div class="slider-list">
                        <ul class="slider-ul">
                            <li><i class="fa fa-check-circle-o" aria-hidden="true" style="margin-right:20px;"></i><span style="color: #f1efef;">Lorem ipsum dolor sit amet</span></li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true" style="margin-right:20px;"></i><span style="color: #f1efef;">Consectetur adipisicing</span></li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true" style="margin-right:20px;"></i><span style="color: #f1efef;">Elit sed do eiusmod</span></li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true" style="margin-right:20px;"></i><span style="color: #f1efef;">Tempor incididunt ut</span></li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true" style="margin-right:20px;"></i><span style="color: #f1efef;">Labore et dolore magna</span></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-12 center button-container"><a href="#" class="uppercase blue-button center">LEARN MORE</a></div>
                </div> 
            </div>
        <?php } ?>     
      </div>
    </div>
</section>  
<section class="content-1 clear">
<div class="col-md-12 no-space">
    <div class="col-sm-12 col-md-12 col-lg-6 no-space left banner-content" style="height: 600px;">
        <img class="cover" src="<?php echo get_template_directory_uri() . "/assets/images/home/banner-2-min.png"; ?>"/>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 no-space left  mobile-liquid" style="height: 600px;background-color: #2e2d35;">
        <div class="content-right vertical-center-c1">
            <h1 class="bold color-white">Lorem ipsum dolor</h1>
            <br/>
            <p class="color-white default">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p><br/>
            <p class="color-white default">Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam.</p>
        </div>
    </div>
</div>
</section>
<section class="service-1 clear">
<div class="col-md-12 content" style="background-color:#d29010;">
    <div class="container">
        <h1 class="bold color-white center default">Lorem ipsum dolor</h1>
        <div class="col-md-12 no-space" style="margin-top:50px !important;">
             <div class="col-xs-12 col-sm-6 col-md-3 left">
                <i class="fa fa-pencil-square-o color-white center" aria-hidden="true" style="font-size: 67px;width: 100%;margin: 0 auto;"></i>
                <h3 class="color-white center">Lorem ipsum dolor sit</h3>
                <p class="default color-white center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-3 left">
                <i class="fa fa-thumbs-o-up color-white center" aria-hidden="true" style="font-size: 67px;width: 100%;margin: 0 auto;"></i>
                <h3 class="color-white center">Lorem ipsum dolor sit</h3>
                <p class="default color-white center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-3 left">
                <i class="fa fa-star color-white center" aria-hidden="true" style="font-size: 67px;width: 100%;margin: 0 auto;"></i>
                <h3 class="color-white center">Lorem ipsum dolor sit</h3>
                <p class="default color-white center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-3 left">
                <i class="fa fa-truck color-white center" aria-hidden="true" style="font-size: 67px;width: 100%;margin: 0 auto;"></i>
                <h3 class="color-white center">Lorem ipsum dolor sit</h3>
                <p class="default color-white center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
             </div>
        </div>
    </div>
</div>
</section>
<section class="service-2 clear">
<div class="col-md-12 content" style="background-color:#1f1f1f;">
    <div class="container">
        <h1 class="bold color-white center default">Lorem ipsum dolor</h1>
        <div class="col-md-12 no-space service-2-container" style="margin-top:50px !important;">
             <div class="col-xs-12 col-sm-6 col-md-3 left service-block">
                <img class="cover" style="max-height:400px;" src="<?php echo get_template_directory_uri() . "/assets/images/home/project-1-min.png"; ?>"/>
                <br class="clear" /><br/>
                <div class="center">
                    <a href="#" class="view-button">VIEW</a>
                </div>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-3 left service-block">
                <img class="cover" style="max-height:400px;" src="<?php echo get_template_directory_uri() . "/assets/images/home/project-2-min.png"; ?>"/>
                <br class="clear" /><br/>
                <div class="center">
                    <a href="#" class="view-button">VIEW</a>
                </div>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-3 left service-block">
                <img class="cover" style="max-height:400px;" src="<?php echo get_template_directory_uri() . "/assets/images/home/project-3-min.png"; ?>"/>
                <br class="clear" /><br/>
                <div class="center">
                    <a href="#" class="view-button">VIEW</a>
                </div>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-3 left service-block">
                <img class="cover" style="max-height:400px;" src="<?php echo get_template_directory_uri() . "/assets/images/home/project-4-min.png"; ?>"/>
                <br class="clear" /><br/>
                <div class="center">
                    <a href="#" class="view-button">VIEW</a>
                </div>
             </div>
        </div>
    </div>
</div>
</section>
<section class="content-2 clear">
<div class="col-md-12 no-space">
    <div class="col-sm-12 col-md-12 col-lg-6 no-space left mobile-liquid" style="height: 600px;background-color: #ffffff;">
        <div class="content-right vertical-center-c2">
            <h1 class="bold color-black">Lorem ipsum dolor</h1>
            <br/>
            <p class="color-black default">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p><br/>
            <p class="color-black default">Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta</p> 
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 no-space left banner-content" style="height: 600px;">
        <img class="cover" src="<?php echo get_template_directory_uri() . "/assets/images/home/banner-3-min.png"; ?>"/>
    </div>

</div>
</section>
<?php get_footer(); ?>