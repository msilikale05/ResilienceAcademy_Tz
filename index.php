
<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package wp_theme_foss_4_g_dar

 */
get_header(); ?>
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
<div class="clear"></div>

</header> 
<div class="intro-banner3">
	<div class="container">

		<h2>
			
			<?php 
			echo esc_attr(get_bloginfo( 'description', 'display' ));
			 ?>
		</h2>
	</div>
</div>

 <?php do_action('wp_theme_foss_4_g_dar__action_breadcrumb'); ?>
<div class="cart-section-lst section-padding white-bg"> 
   <img id="headering" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="Header image alt text" />

        <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<div class="container-fluid blog-header">

					<div class="section-title text-center">
		                <h2 id="blog-title"><?php single_post_title(); ?></h2>
		            </div>
		         </div>
	<div class="container">
            <div class="row">
			<?php
			endif;
			?>
			<?php get_sidebar(); ?>

			<div class="col-md-12 col-sm-12  blog-wrap">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>
                <?php
		                /*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;
					?>
					<div class="clearfix"></div>
					<?php

					/**
					 * Hook - nature_bliss_action_posts_navigation.
					 *
					 * @hooked: nature_bliss_custom_posts_navigation - 10
					 */
					do_action( 'wp_theme_foss_4_g_dar__action_posts_navigation' );

				else :

					get_template_part( 'content', 'none' );

				endif; ?>
				</div>


             
            </div>

            
        </div>
</div>
    <!-- cart list section end -->
<nav class="text-center">
<?php pagination_bar(); ?>
</nav>

    <?php get_footer();?>
