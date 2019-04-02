<section class="hero mission_inner hero_inner-article">

<!-- hero__layout -->
<div class="hero__layout">
</div>

</section>
<div class="container" style="margin-top:55px;">
<h2 class="site__title site__title_inner"><?php the_title(); ?></h2>
 <?php if(has_post_thumbnail()): ?>
     <div class="description">
         <div class="site__centered">
         <?php the_post_thumbnail( 'single-featured-post' ); ?>
                    
   <?php endif;?>
        <p style="text-align: justify;"> <?php
            the_content();?>
         </p>
         </div>  
    </div>
 </div>