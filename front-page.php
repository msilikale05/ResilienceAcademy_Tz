<?php
/**
 * Main front page file
 *
 * 
 */

get_header();

// If static page is front-page, get it's template.
if ( get_option( 'show_on_front' ) == 'page' ) {

	$wp_theme_foss_4_g_dar_keep_old_fp_template = get_theme_mod( 'wp_theme_foss_4_g_dar_keep_old_fp_template' );
	if ( ! $wp_theme_foss_4_g_dar_keep_old_fp_template ) {

		// For users who had previously installed 1.8.5 or less. Keep the old settings.
		if ( wp_theme_foss_4_g_dar_check_if_old_version_of_theme() ) {
			include( get_page_template() );
		} else {
			// For new users add the frontpage template for every static page
			get_template_part( 'content', 'frontpage' );
		}
	} else {
		include( get_page_template() );
	}
} else {

	// For users who had previously installed 1.8.5 or less. Keep the old settings.
	if ( wp_theme_foss_4_g_dar_check_if_old_version_of_theme() ) {


		get_template_part( 'content', 'frontpage' );
		

	} else {
		// For new users. Display the correct WordPress content.
		if ( ! wp_theme_foss_4_g_dar_check_if_old_version_of_theme() ) {

			$blog_header_title    = get_theme_mod( 'wp_theme_foss_4_g_dar_blog_header_title', esc_html__( 'Blog', 'wp_theme_foss_4_g_dar' ) );
			$blog_header_subtitle = get_theme_mod( 'wp_theme_foss_4_g_dar_blog_header_subtitle', esc_html__( 'wp_theme_foss_4_g_dar supports a custom frontpage', 'wp_theme_foss_4_g_dar' ) );

			if ( ! empty( $blog_header_title ) || ! empty( $blog_header_subtitle ) ) {

				echo '<div class="blog-header-wrap">';
					echo '<div class="blog-header-content-wrap">';
				if ( ! empty( $blog_header_title ) ) {
					echo '<h1 class="intro-text">' . esc_html( $blog_header_title ) . '</h1>';
				}
				if ( ! empty( $blog_header_subtitle ) ) {
					echo '<p class="blog-header-subtitle">' . esc_html( $blog_header_subtitle ) . '</p>';
				}
					echo '</div>';
				echo '</div>';
			}
		}
		?>
			<div class="clear"></div>
			</header> <!-- / END HOME SECTION  -->
			<?php wp_theme_foss_4_g_dar_after_header_trigger(); ?>
			<div id="content" class="site-content blog-site-content">

				<div class="container">

					<div class="content-left-wrap col-md-9">

						<div id="primary" class="content-area">

							<main id="main" class="site-main" itemscope itemtype="http://schema.org/Blog">
								<?php
								if ( have_posts() ) :

									while ( have_posts() ) :
										the_post();

										/**
										 * Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */

										get_template_part( 'content', get_post_format() );

									endwhile;

									echo get_the_posts_navigation(
										array(
											/* translators: Newer posts arrow */
											'next_text' => sprintf( __( 'Newer posts %s', 'wp_theme_foss_4_g_dar' ), '<span class="meta-nav">&rarr;</span>' ),
											/* translators: Older posts arrow */
											'prev_text' => sprintf( __( '%s Older posts', 'wp_theme_foss_4_g_dar' ), '<span class="meta-nav">&larr;</span>' ),
										)
									);

								else :

									get_template_part( 'content', 'none' );

								endif;
								?>
							</main><!-- #main -->

						</div><!-- #primary -->

					</div><!-- .content-left-wrap -->


				</div><!-- .container -->
			<?php
	}
}


get_footer(); ?>
