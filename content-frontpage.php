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
    <section>
    <div class="bg-image"></div>
    <div class="mission-page">
        <div class="container">
      <div class="mission-row-one" >
      <div class="row">
            <div class="col-md-3">
              <div class="mission-circle1">
           <h2 class="text-center"> Drone <br>imagery<br></h2>
          </div>
          </div>   
          <div class="col-md-6" >
          <h1 id="mission">Mission</h1>  
           <div class="mission-rectangle">
           <h1 class="mission_words"> urban resilience <br></h2>
          </div>
        </div>
          <div class="col-md-3">
              <div class="mission-circle2">
           <h2 class="text-center"> Data <br> management </h2>
          </div>
    </div>
       </div>
       </div>
    </div>
      <div class="mission-row-two" >
      <div class="row">
            <div class="col-md-6">
              <div class="mission-circle3">
              <h2 class="text-center"> Community <br>mapping<br> </h2>
          </div>
          </div>   
          <div class="col-md-6">
              <div class="mission-circle4">
           <h2 class="text-center"> Resilience <br>visualization<br> </h2>
          </div>
       </div>
       </div>
    </div>
    <div class="container">
      <div class="mission-row-three" >
      <div class="row">
            <div class="col-md-6">
              <div class="mission-circle5">
           <h2 class="text-center"> climate change <br>& resilience<br> </h2>
          </div>
          </div>   
          <div class="col-md-6">
              <div class="mission-circle6">
           <h2 class="text-center"> flood analysis<br>& prediction<br> </h2>
          </div>
    </div>
       </div>
       </div>
    </div>
   </div>
 </section>
<section class="latest"> 
<div class="container" style="padding-top:44px; ">
<h2 style="text-align: center;"> Recent News for resilience academy</h2>
<div class="row" style="margin-bottom:25px;" >
    <?php
$args = array( 'numberposts' => 3, 'order'=> 'DSC', 'orderby' => 'title' );
$postslist = get_posts( $args );
$max_size = 12/sizeof($postslist);
$col_css = "col-md-". $max_size;
foreach ($postslist as $post) :  setup_postdata($post); ?> 
 <div class="col-md-4">
 <div class="card">
 <figure class="blogimg">
  <?php the_post_thumbnail( 'single-featured'); ?>
 </figure>
   <div class="blog-title">
    <h3 ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <div class="auth">
   <p>Written by <?php the_author(); ?>
   <time class="postdate"><?php echo get_the_date(); ?></time>
    </p>
 </div>
 <div class="blog-info">
 <?php if ( (get_theme_mod('full_content') == 1) && is_home() ) : ?>
				<?php the_content(); ?>
			<?php else : ?>
				<?php the_excerpt(); ?>
			<?php endif; ?>
    <p class="blog-link"><a href="<?php the_permalink(); ?>" >
        <?php esc_attr_e('Read More ','wp_theme_foss_4_g_dar'); ?>
      <i class="fa fa-long-arrow-right"></i></a>
      </p>
 </div> 
</div>
</div>
</div> 
<?php endforeach; ?>
</div>
</div>  
</section>

    </div>
    </div>
    <?php get_footer(); ?> 