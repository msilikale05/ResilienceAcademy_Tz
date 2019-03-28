<?php
 /* Template Name: Research */
get_header();  ?>
<?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-wrap-2 ftco-animate p-4">
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
<?php get_footer(); ?> 