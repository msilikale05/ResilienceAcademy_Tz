<?php
 /* Template Name: Research */
get_header();  ?>
<div class="education">
    <div class="module-card-list">

        <div class="module-card">
            <div class="module-card-title">Thesis:</div>
            <div class="module-card-content">
                <p>If you are interested to explore or
                    submit your thesis which have the
                    valid contribution of the real world
                    problem or to see what others have
                    done continue here.</p>
            </div>
        </div>
        <div class="research-card">
            <div class="module-card-title">RESEARCH</div>
            <div class="module-card-content">
                <p>The research mission for Resilience
                    Academy is to build the Urban resilience
                    competencies by using open, local and
                    affordable methods. We are derived by
                    Sustainable Development Goals 11 by make
                    all the cities inclusive, safe and Resilient.</p>
            </div>
        </div>
    </div>
    <div class="module-card-list">
        <div class="module-card">
            <div class="module-card-title">Projects:</div>
            <div class="module-card-content">
                <p>We are working with the university
                    networks and other partners in
                    Tanzania and abroad. So here we
                    are displaying the project which
                    have completed and/or ongoing but
                    more importantly, projects which
                    share useful tools and technologies
                    as well as methodology with more
                    impact to solving problems in our
                    Cities</p>
            </div>
        </div>
        <div class="module-card">
            <div class="module-card-title">Scholarships:</div>
            <div class="module-card-content">
                <p>Through our network, we are
                    making the best effort to collect
                    scholarships to give more
                    opportunities which allow many
                    young experts to get the most
                    current education which solve
                    current problems.</p>
            </div>
        </div>
    </div>

    <div class="module-card-list">
        <div class="module-card">
            <div class="module-card-title">Call for students
                thesis works:</div>
            <div class="module-card-content">
                <p>Are you searching for the call for
                    students thesis works? Here we
                    display Call for students thesis
                    works from our partners in
                    Tanzania, Africa and
                    internationals.</p>
            </div>
        </div>
        <div class="module-card">
            <div class="module-card-title">Public:</div>
            <div class="module-card-content">
                <p>xxxxxxxxxxxxxx</p>
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