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
<section class="services-section" style="background: url('<?php echo get_template_directory_uri() . "/assets/images/inner/background-inner.png"; ?>') no-repeat;background-size: cover;padding-bottom: 50px;">
    <div class="row">
        <div class="container">
			<div class="col-md-6 form-container form-home left inner">
			<h1><?php the_title();?></h1>
			<br>
			<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/page/content', 'page' );
					the_content();
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>
			</div>
 		</div>
 	</div>
 </section>

<?php get_footer('inner'); ?>