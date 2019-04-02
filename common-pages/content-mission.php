<?php
/**
 * The template for displaying all single posts
  *
 * 
 */
get_header();?>
<section class="hero hero_inner hero_inner-article">

<!-- hero__layout -->
<div class="hero__layout">

    <!-- site__title -->
    <h2 class="site__title site__title_inner"><?php the_title(); ?></h2>
    <!-- /site__title -->

    <!--article-info-->
    <div class="article-info">

        <time class="article-info__item" datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>

    </div>
    <!--/article-info-->

</div>
<!-- /hero__layout -->

</section>
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
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'module' ); ?>

		<?php endwhile; // end of the loop. ?>
	</div>
</div>
 <?php 
get_footer();
?>

<?php
