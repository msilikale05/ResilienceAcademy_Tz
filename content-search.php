<?php
/**
 * Template part for displaying results in search pages
 
 */

?>


 <div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
    <div class="blog-content clearfix">
        
        <div class="blog-info">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="blog-link"><?php esc_attr_e('Read More ','wp_theme_foss_4_g_dar'); ?><i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>

