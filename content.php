

<?php
/**
 * Template part for displaying posts
 *
 */
?>

<article class="post-page">
 <div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <div class="text-center">
 <?php if(has_post_thumbnail()): ?>
    <figure class="blog-img">
        <a href="<?php the_permalink(); ?>">
           <?php the_post_thumbnail( 'single-featured-post'); ?>
        </a>
    </figure>
<?php endif;?> 
</div>
<div class="blog_details">
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</div>
 <div class="blog-content clearfix">
 <div class="auth">
     <p>This post was written by <?php the_author(); ?>
        <time class="postdate"><?php echo get_the_date(); ?></time>
        </p>
        </div>
        <div class="blog-info">
            <p><?php the_excerpt(); ?></p>
  <a href="<?php the_permalink(); ?>" class="blog-link"><?php esc_attr_e('Read More ','wp_theme_foss_4_g_dar'); ?><i class="fa fa-long-arrow-right"></i></a>
       </div>
    </div> 

</div>
</article>
































