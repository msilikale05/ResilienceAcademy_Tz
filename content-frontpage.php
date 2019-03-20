<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>
    <!-- home content -->
    <div class="slider_page">  
       <img src="<?php echo get_bloginfo('template_directory'); ?>/img/bg_1.jpg"
          alt="foss4g logo" /></a>
</div>
<section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate p-4">
                        <nav id="gtl-site-navigation" class="middle_nav">
                    <div  class="" id="middle_nav">
                        <?php 
                            wp_nav_menu( array( 
                                'theme_location' => 'tertiary', 
                                'menu_id'         => 'middle_nav',
                                'menu_class'      => 'tertiary-items',         
                                'container-fluid'      => 'div',
                                'container_class'=> 'tertiary_menu',
                                'walker'         => '',
                                'fallback_cb'    => 'wp_page_menu',

                            ) ); 
                        ?>
                        </div>
                    </nav>
		        </div>
			</div>
	    	</div>
	    </div>
    </section>
    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-yatch"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Activities</h3>
                <p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-around"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Travel Arrangements</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-compass"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Private Guide</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-map-of-roads"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Location Manager</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    </div>
  <?php get_footer(); ?>