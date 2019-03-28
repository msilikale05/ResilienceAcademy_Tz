<?php


// add styles and js to the theme
function add_theme_scripts()
{
    wp_enqueue_style('wp_theme_foss_4_g_dar-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', '1.0', true);
    wp_enqueue_style('wp_theme_foss_4_g_dar-slick', get_template_directory_uri() . '/css/slick.css"', true);
    wp_enqueue_style('wp_theme_foss_4_g_dar-plugins', get_template_directory_uri() . '/css/plugins.css"', true);
    wp_enqueue_style('wp_theme_foss_4_g_dar-racademy', get_template_directory_uri() . '/css/racademy.css"', true);
    wp_enqueue_style('wp_theme_foss_4_g_dar-blog', get_template_directory_uri() . '/css/blog.css"', true);
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

// logo function
add_theme_support( 'custom-logo' );
function foss4g2018_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'the_custom_logo_custom_logo_setup' );
 
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

// feature image in post
$post_date = get_the_date( 'l F j, Y' ); echo $post_date;
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 250, 250);

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
        register_widget('Widget_Mission');
    }
}
add_action('widgets_init', 'page_widgets_init');

/**
 * Load the front page widgets.
 */
if (function_exists('siteorigin_panels_activate')) {
    require get_template_directory() . "/widgets/mission.php";
}

// summary for post
function ra_excerpt_length( $length ) {
	
	$excerpt = get_theme_mod('exc_lenght', '30');
	return $excerpt;
}
add_filter( 'excerpt_length', 'ra_excerpt_length', 999 );

// event widget
add_action('init', 'events_init');

function events_init() {
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
        'supports' => array('thumbnail','editor','title','custom-fields'),
        'taxonomies' => array( 'post_tag', 'category' ),
        'capability_type' => 'post',

	);

	register_post_type( 'events' , $args );
}

/**
 * Function to check if version 1.8.5 or less has been previously installed.
 */
function wp_theme_foss_4_g_dar_check_if_old_version_of_theme() {

    $old_wp_theme_foss_4_g_dar_option   = get_theme_mod( 'wp_theme_foss_4_g_dar_bigtitle_title' );
    $old_wp_theme_foss_4_g_dar_option_2 = get_theme_mod( 'wp_theme_foss_4_g_dar_bigtitle_redbutton_label' );
    $old_wp_theme_foss_4_g_dar_option_3 = get_theme_mod( 'wp_theme_foss_4_g_dar_ourfocus_title' );

    if ( ! empty( $old_wp_theme_foss_4_g_dar_option ) || ! empty( $old_wp_theme_foss_4_g_dar_option_2 ) || ! empty( $old_wp_theme_foss_4_g_dar_option_3 ) ) {
        return true;
    }
    return false;
}
// enable adding theme logo from 
// the dashboard
