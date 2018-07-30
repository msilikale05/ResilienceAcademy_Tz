<?php
/**
 * Template part for displaying page content in page.php
 *
 *l
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
<!-- 		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
 -->	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp_theme_foss_4_g_dar' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<!-- 
	<?php if ( get_edit_post_link() ) : ?>
	<?php endif; ?> -->
</article><!-- #post-<?php the_ID(); ?> -->
