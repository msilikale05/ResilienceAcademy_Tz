<?php

class Widget_Mission extends WP_Widget
{

    // constructor
    function __construct()
    {
        $widget_ops = array('classname' => 'moesia_services_widget', 'description' => __('Show what services you are able to provide.', 'moesia'));
        parent::__construct(false, $name = __('Resilience Academy: Mission', 'moesia'), $widget_ops);
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
    $instance['title']  = strip_tags($new_instance['title']);

    return $instance;
}

// display widget
function widget($args, $instance)
{
    echo $args['before_widget'];
    $cache = array();
    if (!$this->is_preview()) {
        $cache = wp_cache_get('mission_services', 'widget');
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

    $title = (!empty($instance['title'])) ? $instance['title'] : __('MISSION', 'moesia');
    $description = (!empty($instance['description'])) ? $instance['description'] : __('URBAN RESILIENCE', 'moesia');

    /** This filter is documented in wp-includes/default-widgets.php */
    $title = apply_filters('widget_title', $title, $instance, $this->id_base);
    $description = apply_filters('widget_description', $description, $instance, $this->id_base);
    $number = -1;



    $r = new WP_Query(apply_filters('widget_posts_args', array(
        'no_found_rows'       => true,
        'post_status'         => 'publish',
        'post_type'           => 'mission',
        'posts_per_page'      => $number
    )));

    if ($r->have_posts()) :
        ?>
<!-- <div class="mission-section">
    <div class="mission-title">
        <h1 id="mission"><?php echo $title; ?></h1>
        <div class="mission-rectangle">
            <h1 class="mission_words"> <?php echo $description; ?><br></h2>
        </div>
    </div>
    <div class="mission-content">
    <?php while ($r->have_posts()) : $r->the_post(); ?>
    <div class="mission-item">
        <div class="mission-circle1">
            <h2 class="text-center"><?php echo get_the_title(); ?></h2>
        </div>
    </div>
    <?php endwhile; ?>
    </div>
</div> -->

<div class="mission-page">
    <div class="mission-title">
        <h1 id="mission"><?php echo $title; ?></h1>
        <div class="mission-rectangle">
            <h1 class="mission_words"> <?php echo $description; ?><br></h2>
        </div>
    </div>
    <div class="mission-content">
    <?php while ($r->have_posts()) : $r->the_post(); ?>
    <div class="mission-item">
        <div class="mission-circle">
            <h2 class="text-center"><?php echo get_the_title(); ?></h2>
        </div>
    </div>
    <?php endwhile; ?>
    </div>
</div>

<?php
        // Reset the global $the_post as this query will have stomped on it
wp_reset_postdata();

endif;

if (!$this->is_preview()) {
    $cache[$args['widget_id']] = ob_get_flush();
    wp_cache_set('mission_services', $cache, 'widget');
} else {
    ob_end_flush();
}
echo $args['after_widget'];
}
}
