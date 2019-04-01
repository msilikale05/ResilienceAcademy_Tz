 <div>
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
         <h4>This post was written by <?php the_author(); ?></h4>
         </div>  
    </div>
 </div>