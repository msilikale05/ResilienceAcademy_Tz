<?php
 /* Template Name: Education */
get_header();  ?>
<div class="education">
    <div class="module-card-list">
        <div class="module-card">
            <div class="module-card-title">Module 1:</div>
            <div class="module-card-content">
                <p>Geonode Installation, documentation and maintenance routines</p>
            </div>
        </div>
        <div class="module-card">
            <div class="module-card-title">Module 2:</div>
            <div class="module-card-content">
                <p>Geo-spatial data management and dissemination using geonode</p>
            </div>
        </div>
        <div class="module-card">
            <div class="module-card-title">Module 5:</div>
            <div class="module-card-content">
                <p>Climate change and flood resilience</p>
            </div>
        </div>
    </div>

    <div class="module-card-list">
        <div class="module-card">
            <div class="module-card-title">Module 3:</div>
            <div class="module-card-content">
                <p>Geo-spatial data visualization for
                    resilience (Data challenge)</p>
            </div>
        </div>
        <div class="module-card">
            <div class="module-card-title">Module 4:</div>
            <div class="module-card-content">
                <p>Flood mapping, modeling and
                    predictions</p>
            </div>
        </div>
        <div class="module-card">
            <div class="module-card-title">Module 7:</div>
            <div class="module-card-content">
                <p>Using drones and drone images in
                    mapping and land use planning</p>
            </div>
        </div>
    </div>

    <div class="module-card-list">
        <div class="education-card">
            <div class="module-card-title">EDUCATION</div>
            <div class="module-card-content">
                <p>We are derived by Sustainable Development
                    Goals 11 by make all the cities inclusive, safe
                    and Resilient.</p>
            </div>
        </div>
        <div class="module-card">
            <div class="module-card-title">Module 6:</div>
            <div class="module-card-content">
                <p>Community mapping and
                    participatory GIS methods for
                    improved resilience planning</p>
            </div>
        </div>
    </div>

</div>
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