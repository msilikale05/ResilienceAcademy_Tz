<?php
/**
 * The template for displaying all single posts
  *
 * 
 */

get_header();?>
  <section class="js-include" id="branding" style="margin-top: 80px;">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div id="logo-foss4g" class="col-lg-4 text-center">
                    <a href="index.php">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/FOSSG42018logo.svg" width="246"
                             height="100" alt="foss4g logo"/></a>
                </div>
                <div id="logo-hot" class="col-lg-4 text-center">
                    <a href="http://hotosm.org">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/hot-logo.png "
                             height="80" alt="HOT logo"/></a>
                </div>
                <div id="logo-osgeo" class="col-lg-4 text-center">
                    <a href="http://osgeo.org">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo-osgeo.svg " width="246"
                             height="100" alt="osgeo logo"/></a>
                </div>
            </div>
        </div>
    </section>
<img id="headering" src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="Header image alt text"/>

<?php do_action('wp_theme_foss_4_g_dar_action_breadcrumb'); ?>

<div class="cart-section-lst section-padding white-bg">
 <section class=" blog-header">
<div>
                    <div class="section-title text-center">
                        <h2 id="blog-title"><?php single_post_title(); ?></h2>
                    </div>
                 </div>
                 </section>
    <div class="container">
    	<div class="row">
    	<?php 
    		$sidebar = esc_attr(get_theme_mod('single_post_sidebar_position','right'));
	        if($sidebar=="none"):
	        	$class = "col-md-12  col-sm-12 ";
	        else:
	        	$class = "col-md-8  col-sm-8 ";
	        endif;

	        if($sidebar=="left"):
            		get_sidebar();
            endif;
    	?>
    		<div class="<?php echo esc_attr($class); ?> blog-wrap">

			
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>


		<?php endwhile; // end of the loop. ?>
			 </div>

		</div>
	</div>
</div>
 <?php 
get_footer();
?>

<?php
