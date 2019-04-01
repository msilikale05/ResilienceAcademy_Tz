<?php ?>
<section > 
<div class="container upcoming_events">
<div class="row">
<div class="col-md-4 col-sm-12">
			<h2 class="featured-news">Upcoming Events</h2>
				<p>
				Lorem Ipsum is simply dummy text of the
				printing and typesetting industry. Lorem
				Ipsum has been the industry's standard
				dummy text ever since the 1500s, when an
				unknown printer took a galley of type and
				scrambled it to make a type specimen book.
				</p>
				<button class="btn btn-default"> Full calender</button>	
		</div>
  <div class="col-md-6 col-md-offset-2">   
  <?php query_posts( 'post_type=events&slug=events&orderby=meta_value'); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="row">
     <div class="col-md-4">
      <span class="event-date">
      <a href="<?php the_permalink(); ?>"><?php								
            $date = get_post_meta($post->ID, 'event-start-date', true);				
            if ($date){					
            echo $date;				
            }				
            ?>
            </a>
       </span>
    </div>
    <div class="col-md-8">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php the_excerpt(); ?></p>         
     </div>
    </div>
    <?php wp_insert_attachment( $attachment, $filename, $parent_post_id ); ?> 

    <?php endwhile; else: ?>
            <h3>Sorry, no upcoming events!</h4>
          <?php endif; ?>
    <?php wp_reset_query(); ?>
   </div>
</div>  
</section>
