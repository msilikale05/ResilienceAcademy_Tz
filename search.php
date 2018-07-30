<?php
/**
 * The template for displaying search results pages
*/

get_header(); ?>


<div class="intro-banner">
	<div class="container">
		<h2>
			<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'wp_theme_foss_4_g_dar' ), '<span>' . get_search_query() . '</span>' );
			?>
		</h2>
	</div>
</div>


<?php do_action('wp_theme_foss_4_g_darl_action_breadcrumb'); ?>

<div class="cart-section-lst section-padding white-bg">
        <div class="container">
        <?php
		if ( have_posts() ) :
		?>		

			
					<header class="page-header">
						<h1 class="page-title"><?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'wp_theme_foss_4_g_dar' ), '<span>' . get_search_query() . '</span>' );
						?></h1>
					</header><!-- .page-header -->

            <div class="row">
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
						get_template_part( 'content', 'search' );

					endwhile;
					?>
					<div class="clearfix"></div>
					<?php
					/**
					 * Hook - nature_bliss_action_posts_navigation.
					 *
					 * @hooked: nature_bliss_custom_posts_navigation - 10
					 */
					do_action( 'wp_theme_foss_4_g_dar_action_posts_navigation' );



				else :

					get_template_part( 'content', 'none' );

				endif; ?>

                
            </div>

            
        </div>
    </div>
    <!-- cart list section end -->
    <?php get_footer();?>
