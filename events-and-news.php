

<?php ?>
<section > 
    <?php
    $args = array( 'numberposts' => 5, 'order'=> 'DSC', 'orderby' => 'title');
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post); ?> 
  <div class="events-news">
        <span class="event-date"> 20 </span>
        <div>
        <h4>Title for the events</h4>
        <p>Lorem Ipsum is simply dummy text of the
				printing and typesetting industry. Lorem
				Ipsum has been the industry's standard
                dummy text ever since the 1500s,</p>
</div>
</div>
<?php endforeach; ?>
</section>
