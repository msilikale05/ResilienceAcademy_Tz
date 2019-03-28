<?php

class Widget_Education extends WP_Widget
{

    // constructor
    function __construct()
    {
        $widget_ops = array('classname' => 'moesia_services_widget', 'description' => __('Show what services you are able to provide.', 'moesia'));
        parent::__construct(false, $name = __('Resilience Academy: Education', 'moesia'), $widget_ops);
        $this->alt_option_name = 'moesia_services_widget';
    }

    // widget form creation
    function form($instance)
    {

        // Check values
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $description = isset($instance['description']) ? esc_attr($instance['description']) : '';
        ?>

<p><?php _e('In order to display this widget, you must first add some services from the dashboard. Add as many as you want and the theme will automatically display them all.', 'moesia'); ?></p>
<p>
    <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'moesia'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id('description'); ?>"><?php _e('Description', 'moesia'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>" type="text" value="<?php echo $description; ?>" />
</p>
<?php

}

// update widget
function update($new_instance, $old_instance)
{
    $instance = $old_instance;
    $instance['title']             = strip_tags($new_instance['title']);

    return $instance;
}

// display widget
function widget($args, $instance)
{
    echo $args['before_widget'];
    $cache = array();
    if (!$this->is_preview()) {
        $cache = wp_cache_get('education_services', 'widget');
    }

    if (!is_array($cache)) {
        $cache = array();
    }

    if (!isset($args['widget_id'])) {
        $args['widget_id'] = $this->id;
    }

    if (isset($cache[$args['widget_id']])) {
        echo $cache[$args['widget_id']];
        return;
    }

    ob_start();
    extract($args);

    $title = (!empty($instance['title'])) ? $instance['title'] : __('EDUCATION', 'moesia');
    $description = (!empty($instance['description'])) ? $instance['description'] : __('URBAN RESILIENCE', 'moesia');

    /** This filter is documented in wp-includes/default-widgets.php */
    $title = apply_filters('widget_title', $title, $instance, $this->id_base);
    $description = apply_filters('widget_description', $description, $instance, $this->id_base);
    $number = -1;
        ?>
        
<section class="education">
    <div class="row">
    <div class="col-md-5 col-md-offset-7">
        <div class="education-card" style="margin-top:35px;">
            <h3 class="module-card-title"> <?php echo $title ?></h3>
            <div class="module-card-content">
            <p><?php echo $description ?></p>
           </div>
        </div>
       </div>
    </div>
  <?php query_posts( 'post_type=education&slug=education&orderby=meta_value&order=ASC'); ?>
  <div class="modules">
  <div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="col-md-4">
       <div class="module-card">
           <h3 class="module-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
           <p  style="padding:5px;"><?php the_excerpt(); ?></p>         
           </div>
       </div>
      <?php endwhile; else: ?>
              <h3>Sorry, no upcoming events!</h4>
            <?php endif; ?>
      <?php wp_reset_query(); ?>
      </div>
      </div>
     </section>
     
<?php
        // Reset the global $the_post as this query will have stomped on it
wp_reset_postdata();

if (!$this->is_preview()) {
    $cache[$args['widget_id']] = ob_get_flush();
    wp_cache_set('education_services', $cache, 'widget');
} else {
    ob_end_flush();
}
echo $args['after_widget'];
}
}
