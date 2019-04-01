<div>

        <div class="container">
            <div class="row">

           
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <div class="blog-content blog-single-content">

                       
                    <?php if(has_post_thumbnail()): ?>
                <div class="col-md-12 col-sm-12 blog-single-wrap">
                    <figure >
                    <?php the_post_thumbnail( 'single-featured-post' ); ?>
                    </figure>
                    
                </div>
             <?php endif;?>
     
                        <div class="blog-data">
                            <h3><?php the_title(); ?></h3>
                                            <div class="auth">
     <p>This post was written by <?php the_author(); ?>
        <time class="postdate"><?php echo get_the_date(); ?></time>
        </p>
        </div>
                          <?php
                                the_content();

                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp_theme_resilience_academy' ),
                                    'after'  => '</div>',
                                ) );
                            ?>
                            
                        </div>
                    </div>
                    <!-- Blog details -->

                    <div class="blog-single-social">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 blog-category">
                                <ul class="blog-cat-lst list-inline">

                                    <?php
                                     do_action( 'wp_theme_resilience_academy_action_tags_display' );
                                     ?>
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                    <!-- blog category -->

                    <?php 
                     // Previous/next post navigation.
                    the_post_navigation( array(
                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'wp_theme_resilience_academy' ) . '</span> ' .
                            '<span class="screen-reader-text">' . __( 'Next post:', 'wp_theme_resilience_academy' ) . '</span> ' .
                            '<span class="post-title">%title</span>',
                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'wp_theme_resilience_academy' ) . '</span> ' .
                            '<span class="screen-reader-text">' . __( 'Previous post:', 'wp_theme_resilience_academy' ) . '</span> ' .
                            '<span class="post-title">%title</span>',
                    ) );



                    ?>
                   
                    <!-- Comments section -->
                    <div class="clearfix"></div>

                   <?php
                   if ( comments_open() || '0' != get_comments_number() ) :
                        comments_template();
                    endif;
                   ?>
                </div>
                <!-- blog  -->
                
                
            </div>
            
        </div>
    </div>