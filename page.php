<?php
 /* The template for displaying all pages.

  */
 get_header();  ?>
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
<div id="primary" class="content-area">
<section class="blog-header">
 <div >

                    <div class="section-title text-center">
                        <h2 id="blog-title"><?php single_post_title(); ?></h2>
                    </div>
                 </div>
                 </section>
			<main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

						get_template_part( 'content', 'page' );

					if ( comments_open() || '0' != get_comments_number() ) :

						comments_template();

						endif;

					endwhile;
				?>

			</main><!-- #main -->
</div>
<?php get_footer(); ?>