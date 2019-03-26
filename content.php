

<?php ?>
<section > 
<div class="container" >
<div class="row"  >
    <?php
    $args = array( 'numberposts' => 10, 'order'=> 'DSC', 'orderby' => 'title', 'category_name' => 'featured_news');
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post); ?> 
 <div class="col-md-6">
 <div class="card">

 <div class="row" style="margin-top:45px;">
 <div class="col-md-7">
 <figure class="blog-img">
  <?php the_post_thumbnail( 'single-featured'); ?>
 </figure>
</div>
<div class="col-md-5">
<span class="article-feature_content"></span>
        <h3 class="header_style"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="blog">
        <p><?php the_excerpt(); ?></p>
        <p><time class="postdate"><?php echo get_the_date(); ?></time></p>
    </div>
</div>
</div>
</div> 
</div>
<?php endforeach; ?>
</div>
</div>  
</section>
