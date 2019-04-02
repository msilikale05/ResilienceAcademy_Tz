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
<div class="container" style="margin-top:55px;">				
 <?php if(has_post_thumbnail()): ?>
     <div class="description">
         <div class="site__centered">
         <?php the_post_thumbnail( 'single-featured-post' ); ?>
                    
   <?php endif;?>
        <p style="text-align: justify;"> <?php
            the_content();
                 wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp_theme_resilience_academy' ),
                                    'after'  => '</div>',
                                ) ); ?>
         </p>
         <h4 >This post was written by <?php the_author(); ?></h4>
         </div>  
    </div>
 </div>