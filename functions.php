<?php


// add styles and js to the theme
function add_theme_scripts()
{
    wp_enqueue_style('wp_theme_foss_4_g_dar-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', '1.0', true);
    wp_enqueue_style('wp_theme_foss_4_g_dar-slick', get_template_directory_uri() . '/css/slick.css"', true);
    wp_enqueue_style('wp_theme_foss_4_g_dar-plugins', get_template_directory_uri() . '/css/plugins.css"', true);
    wp_enqueue_style('wp_theme_foss_4_g_dar-blog', get_template_directory_uri() . '/css/racademy.css"', true);
    wp_enqueue_style('wp_theme_foss_4_g_dar-style', get_template_directory_uri() . '/css/style.css"', true);
    wp_enqueue_style('leaflet_css', get_template_directory_uri() . '/css/leaflet.css');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), true);
    wp_enqueue_script('jquery_ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), true);

    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), true);
    wp_enqueue_script('modules', get_template_directory_uri() . '/js/modules.js', array('jquery-ui-core', 'jquery'), true);
    wp_enqueue_script('current', get_template_directory_uri() . '/js/current.js', array('jquery-ui-core', 'jquery'), true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/js/jquery.countdown.min.js', array('jquery-ui-core', 'jquery'), true);
    wp_enqueue_script('leaflet_js', get_template_directory_uri() . '/js/leaflet.js');
    wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
    wp_enqueue_script('foss4g', get_template_directory_uri() . '/js/foss4g.js', array('jquery-ui-core', 'jquery'),  true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

// enable HTML5 support
add_theme_support('html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
));

// register them menus
function wpb_custom_new_menu()
{
    register_nav_menus(array(
        'primary' => esc_html__('Primary', 'wp_theme_foss_4_g_dar'),
        'secondary' => esc_html__('Secondary', 'wp_theme_foss_4_g_dar'),
        'tertiary' => esc_html__('Tertiary', 'wp_theme_foss_4_g_dar'),

    ));
}
add_action('init', 'wpb_custom_new_menu');


// theme widgets
function page_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'wp_theme_foss_4_g_dar'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'wp_theme_foss_4_g_dar'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    //Register the front page widgets
    if (function_exists('siteorigin_panels_activate')) {
        register_widget('Moesia_Edgar');
    }
}
add_action('widgets_init', 'page_widgets_init');

/**
 * Load the front page widgets.
 */
if (function_exists('siteorigin_panels_activate')) {
    require get_template_directory() . "/widgets/mission.php";
}

// enable adding theme logo from 
// the dashboard
add_theme_support('custom-logo');

 