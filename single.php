<?php
/**
 * The template for displaying all single posts
  *
 * 
 */
get_header();?>

<?php do_action('wp_theme_foss_4_g_dar_action_breadcrumb'); ?>
<div class="cart-section-lst section-padding white-bg">
    <div class="single-blog">				
		<?php while ( have_posts() ) : the_post(); ?>
            
            <?php if('events' == get_post_type()){
            get_template_part( 'common-pages/content', 'event' ); }
            elseif ( 'post' == get_post_type()){ 
                get_template_part( 'content', 'single' );
             }
             elseif ( 'education' == get_post_type()){ 
                get_template_part( 'content', 'single' );
             }
             elseif ( 'research' == get_post_type()){ 
                get_template_part( 'content', 'single' );
             }
             elseif ( 'mission' == get_post_type()){ 
                get_template_part( 'content', 'single' );
             }
             else {
                 echo "
                 <h1>Comming Soon!</h1>
                 <p>This page is still under construction will be up soon...</p>";
             }

            ?>

		<?php endwhile; // end of the loop. ?>
	</div>
</div>
 <?php 
get_footer();
?>

<?php
