<?php


// add styles and js to the theme
function add_theme_scripts()
{
    // plugin styles
    wp_enqueue_style('wp_theme_resilience_academy-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', '1.0', true);
    wp_enqueue_style('wp_theme_resilience_academy-slick', get_template_directory_uri() . '/css/slick.css"', true);
    wp_enqueue_style('wp_theme_resilience_academy-plugins', get_template_directory_uri() . '/css/plugins.css"', true);
    wp_enqueue_style('leaflet_css', get_template_directory_uri() . '/css/leaflet.css');

    // custom styles
    wp_enqueue_style('wp_theme_resilience_academy-style', get_template_directory_uri() . '/css/style.css"', true);
    wp_enqueue_style('wp_theme_resilience_academy-racademy', get_template_directory_uri() . '/css/racademy.css"', true);
    wp_enqueue_style('wp_theme_resilience_academy-blog', get_template_directory_uri() . '/css/blog.css"', true);
    wp_enqueue_style('wp_theme_resilience_academy-footer', get_template_directory_uri() . '/css/footer.css"', true);
    wp_enqueue_style('wp_theme_resilience_academy-widget-mission-', get_template_directory_uri() . '/css/widgets/mission.css"', true);


    // scripts
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), true);
    wp_enqueue_script('jquery_ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), true);
    wp_enqueue_script('modules', get_template_directory_uri() . '/js/modules.js', array('jquery-ui-core', 'jquery'), true);
    wp_enqueue_script('current', get_template_directory_uri() . '/js/current.js', array('jquery-ui-core', 'jquery'), true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/js/jquery.countdown.min.js', array('jquery-ui-core', 'jquery'), true);
    wp_enqueue_script('leaflet_js', get_template_directory_uri() . '/js/leaflet.js');
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');


// displays theme panel menu contents
function theme_settings_page()
{
    ?>
<div class="wrap">
    <h1>Theme Panel</h1>
    <form method="post" action="options.php">
        <?php
        settings_fields("section");
        do_settings_sections("theme-options");
        submit_button();
        ?>
    </form>
</div>
<?php

}

// creates theme-panel menu
function add_theme_menu_item()
{
    add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");


function display_twitter_element()
{
    ?>
<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
<?php

}

function display_facebook_element()
{
    ?>
<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
<?php

}
function display_mobile_element()
{
    ?>
<input type="text" name="mobile_url" id="mobile_url" value="<?php echo get_option('mobile_url'); ?>" />
<?php

}

function display_theme_panel_fields()
{
    add_settings_section("section", "All Settings", null, "theme-options");

    add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");
    add_settings_field("mobile_url", "Mobile Number", "display_mobile_element", "theme-options", "section");

    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
    register_setting("section", "mobile_url");
}

add_action("admin_init", "display_theme_panel_fields");

// enable HTML5 support
add_theme_support('html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
));

// logo function
add_theme_support('custom-logo');
function resilienceAcademy_custom_logo_setup()
{
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'the_custom_logo_custom_logo_setup');

// register them menus
function wpb_custom_new_menu()
{
    register_nav_menus(array(
        'primary' => esc_html__('Primary', 'wp_theme_resilience_academy'),
        'secondary' => esc_html__('Secondary', 'wp_theme_resilience_academy'),
        'tertiary' => esc_html__('Tertiary', 'wp_theme_resilience_academy'),

    ));
}
add_action('init', 'wpb_custom_new_menu');

// feature image in post
$post_date = get_the_date('l F j, Y');
echo $post_date;
add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 250);

// theme widgets
function page_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'wp_theme_resilience_academy'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'wp_theme_resilience_academy'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    //Register  widgets
    if (function_exists('siteorigin_panels_activate')) {
        register_widget('Widget_Mission');
        register_widget('Widget_Education');
        register_widget('Widget_Research');
    }
}
add_action('widgets_init', 'page_widgets_init');

/**
 * Load  widgets.
 */
if (function_exists('siteorigin_panels_activate')) {
    require get_template_directory() . "/widgets/mission.php";
    require get_template_directory() . "/widgets/education.php";
    require get_template_directory() . "/widgets/research.php";
}

// summary for post
function ra_excerpt_length($length)
{

    $excerpt = get_theme_mod('exc_lenght', '30');
    return $excerpt;
}
add_filter('excerpt_length', 'ra_excerpt_length', 999);

// event widget
add_action('init', 'custom_posts');

function custom_posts()
{
    $args = array(
        'labels' => array(
            'name' => __('Events'),
            'singular_name' => __('Event'),
            'add_new' => ('Add New'),
            'edit_item' => ('Edit Event'),
            'menu_name' => ('Events'),
            'all_items' => ('All Events'),

        ),
        'public' => true,
        'rewrite' => array("slug" => "events"),
        'supports' => array('thumbnail', 'editor', 'title', 'custom-fields'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
    );
    $argseducation = array(
        'labels' => array(
            'name' => __('Module'),
            'singular_name' => __('Module'),
            'add_new' => ('Add New'),
            'edit_item' => ('Edit Module'),
            'menu_name' => ('Modules'),
            'all_items' => ('All Modules'),

        ),
        'public' => true,
        'rewrite' => array("slug" => "module"),
        'supports' => array('thumbnail', 'editor', 'title', 'custom-fields'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
    );
    $argsresearch = array(
        'labels' => array(
            'name' => __('Research'),
            'singular_name' => __('Research'),
            'add_new' => ('Add New'),
            'edit_item' => ('Edit Research'),
            'menu_name' => ('Research'),
            'all_items' => ('All Research'),

        ),
        'public' => true,
        'rewrite' => array("slug" => "research"),
        'supports' => array('thumbnail', 'editor', 'title', 'custom-fields'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
    );
    register_post_type('events', $args);
    register_post_type('education', $argseducation);
    register_post_type('research', $argsresearch);
}

/**
 * Function to check if version 1.8.5 or less has been previously installed.
 */
function wp_theme_resilience_academy_check_if_old_version_of_theme()
{

    $old_wp_theme_resilience_academy_option   = get_theme_mod('wp_theme_resilience_academy_bigtitle_title');
    $old_wp_theme_resilience_academy_option_2 = get_theme_mod('wp_theme_resilience_academy_bigtitle_redbutton_label');
    $old_wp_theme_resilience_academy_option_3 = get_theme_mod('wp_theme_resilience_academy_ourfocus_title');

    if (!empty($old_wp_theme_resilience_academy_option) || !empty($old_wp_theme_resilience_academy_option_2) || !empty($old_wp_theme_resilience_academy_option_3)) {
        return true;
    }
    return false;
}

