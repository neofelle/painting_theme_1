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
                    <?php echo $i->post_excerpt; ?>
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
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-2') ) : ?>
        <?php endif; ?>
    </div>
</div>
</section>
<section class="service-1 clear">
<div class="col-md-12 content" style="background-color:#d29010;">
    <div class="container">        
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-1') ) : ?>
        <?php endif; ?>
    </div>
</div>
</section>
<section class="service-2 clear">
<div class="col-md-12 content" style="background-color:#1f1f1f;">
    <div class="container">
        <h1 class="bold color-white center default">Lorem ipsum dolor</h1>
        <div class="col-md-12 no-space service-2-container" style="margin-top:50px !important;">
            <?php    
                $args = array(
                'post_type' => 'services',
                'posts_per_page' => 9,
                'order' => 'ASC'
                );
                 
                $the_query = new WP_Query( $args );
                 
                if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                $the_query->the_post();
                $cf_excerpt = get_post_meta($post->ID, 'services_excerpt', $single);            
            ?>

                <?php 
                    $image = "";
                    if (has_post_thumbnail( $post->ID ) ){
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                    }
                ?>
                <div class="col-xs-12 col-sm-6 col-md-3 left service-block">
                    <img class="cover" style="max-height:400px;" src="<?php echo $image[0]; ?>"/>
                    <br class="clear" /><br/>
                    <div class="center">
                        <a href="<?php echo $post->guid; ?>" class="view-button">VIEW</a>
                    </div>
                </div>
            <?php
                }
                } else {
                // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();         
            ?>             
        </div>
    </div>
</div>
</section>
<section class="content-2 clear">
<div class="col-md-12 no-space">
    <div class="col-sm-12 col-md-12 col-lg-6 no-space left mobile-liquid" style="height: 600px;background-color: #ffffff;">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-3') ) : ?>
        <?php endif; ?>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 no-space left banner-content" style="height: 600px;">
        <img class="cover" src="<?php echo get_template_directory_uri() . "/assets/images/home/banner-3-min.png"; ?>"/>
    </div>

</div>
</section>
<?php get_footer(); ?>