
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
  <div class="clear"></div>
</header> 
<div class="event intro-banner3 overlay">
	<h2 class="news">Events <span class='special'>&</span> News</h2>
</div>


<?php do_action('wp_theme_foss_4_g_dar__action_breadcrumb'); ?>
<section>
<div class="cart-section-lst section-padding white-bg"> 
<div class="container" style="margin-top:25px;">
	<h2 class="featured-news">Feature News</h2>	
	   <!-- <img id="headering" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="Header image alt text" /> -->
        <?php
		if ( have_posts() ) :
			if ( (get_theme_mod('full_content') == 1) && is_home() ) : ?>
			 <?php
			endif;
			?>	
				<?php
			/* Start the Loop */
			if ( have_posts() ) : the_post();
			?>
				<?php
				
				get_template_part( 'content', get_post_format() );
		endif;
					?>
					<div class="clearfix"></div>
					<?php
					do_action( 'wp_theme_foss_4_g_dar__action_posts_navigation' );

				else :

					get_template_part( 'content', 'none' );
				

				endif; ?>
			            
        </div>
</div>
<div class="container upcoming_events">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<h2 class="featured-news">Upcoming Events</h2>
				<p>
				Lorem Ipsum is simply dummy text of the
				printing and typesetting industry. Lorem
				Ipsum has been the industry's standard
				dummy text ever since the 1500s, when an
				unknown printer took a galley of type and
				scrambled it to make a type specimen book.
				</p>
				<button class="btn btn-default"> Full calender</button>	
		</div>
		<div class="col-md-6 col-md-offset-2 col-sm-12">
		<?php
		if ( have_posts() ) :
			if ( is_home() ) : ?>
			 <?php
			endif;
			?>	
				<?php
			/* Start the Loop */
			if ( have_posts() ) : the_post();
			?>
				<?php
				
				get_template_part( 'events-and-news', get_post_format() );
		endif;
					?>
					<div class="clearfix"></div>
					<?php
					do_action( 'wp_theme_foss_4_g_dar__action_posts_navigation' );

				else :

					get_template_part( 'events-and-news', 'none' );
				

				endif; ?>	
		</div>
	</div>
</div>	
</section>
    <!-- cart list section end -->
<nav class="text-center">
<?php pagination_bar(); ?>
</nav>

    <?php get_footer();?>
