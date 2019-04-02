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
<div class="page-segment" style="margin-top:25px;">
    <div class="container">
    <?php if(has_post_thumbnail()): ?>
     <div class="description">
         <div class="site__centered">
         <?php the_post_thumbnail( 'single-featured-post' ); ?>
                    
   <?php endif;?>
    <div class="row">
    <div class="col-md-6 col-md-push-6" style="margin-top: 10px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title text-uppercase">Research Proposal</h3>
                 </div>
                 <div class="panel-body"><p>Requesting for research proposal </p>
                <div class="registration_link"><a class="btn btn-action" href="" target="_blank">please register Now</a>
                    </div>
                </div>
        </div>
    </div>
    <div class="col-md-6 col-md-pull-6">
                    <div class="text-16">
                    <p style="text-align: justify;"> <?php
                    the_content(); ?>
         </p>

 </div>
  </div>
  <p style="margin-left:12px;"><strong>This research was written by <?php the_author(); ?></strong></p>

<div>
</div>
</div>
