<?php

function show_post($path) {
    $post = get_page_by_path($path);
    $content = apply_filters('the_content', $post->post_content);
    echo $content;
}

function add_theme_scripts() {
	wp_enqueue_style( 'wp_theme_foss_4_g_dar-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css','1.0',true );
wp_enqueue_style( 'wp_theme_foss_4_g_dar-slick', get_template_directory_uri() . '/css/slick.css"',true );
wp_enqueue_style( 'wp_theme_foss_4_g_dar-plugins', get_template_directory_uri() . '/css/plugins.css"',true );
wp_enqueue_style( 'wp_theme_foss_4_g_dar-blog', get_template_directory_uri() . '/css/blog.css"',true );
wp_enqueue_style( 'wp_theme_foss_4_g_dar-addition', get_template_directory_uri() . '/css/addition.css"',true );
wp_enqueue_style( 'wp_theme_foss_4_g_dar-style', get_template_directory_uri() . '/css/style.css"',true );
 wp_enqueue_style( 'leaflet_css', get_template_directory_uri() . '/css/leaflet.css');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array ( ), true);
    wp_enqueue_script( 'jquery_ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array (  ), true);

    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array ( 'jquery' ),true);
    wp_enqueue_script( 'modules', get_template_directory_uri() . '/js/modules.js', array ( 'jquery-ui-core', 'jquery' ), true);
    wp_enqueue_script( 'current', get_template_directory_uri() . '/js/current.js', array ( 'jquery-ui-core', 'jquery' ), true);
    wp_enqueue_script( 'countdown', get_template_directory_uri() . '/js/jquery.countdown.min.js', array ( 'jquery-ui-core', 'jquery' ), true);
     wp_enqueue_script( 'leaflet_js', get_template_directory_uri() . '/js/leaflet.js');
    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
    wp_enqueue_script( 'foss4g', get_template_directory_uri() . '/js/foss4g.js', array ( 'jquery-ui-core', 'jquery' ),  true);




}	

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
    
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ) );


function wpb_custom_new_menu() {
register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'wp_theme_foss_4_g_dar' ),
    ) );
}
add_action( 'init', 'wpb_custom_new_menu' );
/*
* Define a constant path to our single template folder
*/
define(SINGLE_PATH, TEMPLATEPATH . '/single');
 
/**
* Filter the single_template with our custom function
*/



$post_date = get_the_date( 'l F j, Y' ); echo $post_date;
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 250, 250);
add_image_size( 'single-feature-thumbnai', 290, 218, true );
add_image_size( 'single-featured-post', 0, 512, true  );
add_image_size( 'single-featured', 280, 512, true  );



$args = array(
    'width'         => 'width: 100% !important',
    'height'        => 'flex',
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );

function pagination_bar() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

function page_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'wp_theme_foss_4_g_dar' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp_theme_foss_4_g_dar' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );


}
add_action( 'widgets_init', 'page_widgets_init' );


add_action( 'customize_register' , 'my_theme_options' );

function my_theme_options( $wp_customize ) {
    // Sections, settings and controls will be added here
    $wp_customize->add_section( 
    'wp_theme_foss_4_g_dar_footer_options', 
    array(
        'title'       => __( 'Footer Settings', 'wp_theme_foss_4_g_dar' ),
        'priority'    => 100,
        'capability'  => 'edit_theme_options',
        'description' => __('Change footer options here.', 'wp_theme_foss_4_g_dar'), 
    ) 
);
    $wp_customize->add_setting( 'footer_bg_color',
    array(
        'default' => 'f1f1f1'
    )
); 
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 
    'footer_bg_color_control',
    array(
        'label'    => __( 'Footer Background Color', 'wp_theme_foss_4_g_dar' ), 
        'section'  => 'wp_theme_foss_4_g_dar_footer_options',
        'settings' => 'footer_bg_color',
        'priority' => 10,
    ) 
));
}

/* Add this style only for the other cases than New users that have a static page */
    $wp_theme_foss_4_g_dar_keep_old_fp_template = get_theme_mod( 'wp_theme_foss_4_g_dar_keep_old_fp_template' );

    if ( ! ( ! wp_theme_foss_4_g_dar_check_if_old_version_of_theme() && ( get_option( 'show_on_front' ) == 'page' ) && ! $wp_theme_foss_4_g_dar_keep_old_fp_template ) ) {
        $custom_css = 'body.home.page:not(.page-template-template-frontpage) {
            background-image: none !important;
        }';
        wp_add_inline_style( 'wp_theme_foss_4_g_dar_style', $custom_css );
    }

    function remove_class_function( $classes ) {

    $wp_theme_foss_4_g_dar_keep_old_fp_template = get_theme_mod( 'wp_theme_foss_4_g_dar_keep_old_fp_template' );
    /* For new users with static page */
    if ( ! wp_theme_foss_4_g_dar_check_if_old_version_of_theme() && ( get_option( 'show_on_front' ) == 'page' ) && ! $wp_theme_foss_4_g_dar_keep_old_fp_template ) {
        if ( ! is_front_page() && ! is_home() ) {
            // index of custom-background
            $key = array_search( 'custom-background', $classes );
            // remove class
            unset( $classes[ $key ] );
        }
    } else {
        if ( ! is_home() && ! is_page_template( 'template-frontpage.php' ) ) {
            // index of custom-background
            $key = array_search( 'custom-background', $classes );
            // remove class
            unset( $classes[ $key ] );
        }
    }
    return $classes;

}
add_filter( 'body_class', 'remove_class_function' );



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


?>
