
 <?php if(has_post_thumbnail()): ?>
 <div class="page-segment segment-tint segment-flush" style="margin-top: -6px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-push-6">
             
                <div class="segment-graphic graphic-event-half">
                    <?php the_post_thumbnail( 'single-featured-post' ); ?>
                </div>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <div class="segment-body">
                    <h2 class="page-title"><?php the_title(); ?></h2>
                    <ul class="event-attr-list event-attr-list-lg">
                        <li class="item-list">
                            <ul class="event-attr-list list-inline">
                                <li>Event duration:   <span aria-hidden="true" class="fa fa-calendar"></span>
                                <?php								
                                $date = get_post_meta($post->ID, 'event-start-date', true);				
                                if ($date){					
                                echo $date;				
                                }				
                                ?>
                            </li>
                            <li> Up to  <span aria-hidden="true" class="fa fa-calendar"></span>
                                <?php								
                                $enddate = get_post_meta($post->ID, 'event-end-date', true);				
                                if ($enddate){					
                                echo $enddate;				
                                }				
                                ?>
                                </li>
                                <br>
                                <br>
                                <li> Venue:  <span aria-hidden="true" class="fa fa-map-marker"></span>
                                <?php								
                                $venue = get_post_meta($post->ID, 'event-venue', true);				
                                if ($venue){					
                                echo $venue;				
                                }				
                                ?>
                            </li>
                            <br>
                            <br>
                            <li>Event host:  <span aria-hidden="true" class="fa fa-user"></span>
                                <?php								
                                $hostby = get_post_meta($post->ID, 'hosted-by', true);				
                                if ($hostby){					
                                echo $hostby;				
                                }				
                                ?>
                            </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-segment">
    <div class="container">
    <div class="row">
    <div class="col-md-6 col-md-push-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title text-uppercase">Event Cost and Admission</h3>
                 </div>
                 <div class="panel-body"><p>This event is <strong>free</strong> to attend.</p>
                <div class="registration_link"><a class="btn btn-action" href="" target="_blank">Register Now</a>
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
<div>
</div>
</div>

   <?php endif;?>
   


           

