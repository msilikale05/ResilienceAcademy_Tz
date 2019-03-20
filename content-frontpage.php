<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>
<!-- home content -->

<!--Slider-->
<div class="full_slider preloader">
    <div id="fullwidth_slider" class="flexslider">
        <ul class="slides">
            <li data-thumb="<?php echo get_bloginfo('template_directory'); ?>/dar_from_the_air-thumb.jpg"> <img src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/dar_from_the_air.jpg" alt="" class="slide_bg" /></li>
            <li data-thumb="bg_1-thumb.jpg"> <img src="<?php echo get_bloginfo('template_directory'); ?>/img/bg_1.jpg" alt="" class="slide_bg" /></li>
        </ul>
    </div>
</div>

<!--//Slider-->
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate p-4">
                    <nav id="gtl-site-navigation" class="middle_nav">
                        <div class="" id="middle_nav">
                            <?php 
                            wp_nav_menu(array(
                              'theme_location' => 'tertiary',
                              'menu_id'         => 'middle_nav',
                              'menu_class'      => 'tertiary-items',
                              'container-fluid'      => 'div',
                              'container_class' => 'tertiary_menu',
                              'walker'         => '',
                              'fallback_cb'    => 'wp_page_menu',

                            ));
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- mission section -->
<section class="mission-section">
    <div class="mission-title">Mission</div>
    <div class="mission-row-one">
        <div class="mission-circle">
            DRONE IMAGERY COMPETITION
        </div>
    </div>
</section>
<!-- end mission section -->
<section class="latest">
    <div class="container" style="padding-top:44px;">
        <div class="row">
            <?php
            $args = array('numberposts' => 3, 'order' => 'DSC', 'orderby' => 'title');
            $postslist = get_posts($args);
            $max_size = 12 / sizeof($postslist);
            $col_css = "col-md-" . $max_size;
            foreach ($postslist as $post) :  setup_postdata($post); ?>
            <div class="<?php echo $col_css ?>">
                <div class="card">
                    <figure class="blogimg">
                        <?php the_post_thumbnail('single-featured'); ?>
                    </figure>
                    <div class="blog-title">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="auth">
                            <h6>Written by <?php the_author(); ?>
                                <time class="postdate"><?php echo get_the_date(); ?></time>
                            </h6>
                        </div>
                        <div class="blog-info">
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="blog-link">
                                <?php esc_attr_e('Read More ', 'wp_theme_foss_4_g_dar'); ?>
                                <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
    <?php get_footer(); ?> 