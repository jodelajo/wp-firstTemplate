<?php 

//Requiring Theme Customizer
require get_template_directory() . '/inc/customizer.php';

//Requiring TGM Plugin Activation
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

//Including stylesheet and script files
function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js', array( 'jquery' ), '5.1.1', true);
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css', array(), '5.1.1', 'all' );
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );

}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

function learnwp_gutenberg_fonts(){
    wp_enqueue_style( 'lato-font', 'https://fonts.googleapis.com/css?family=Lato:400,900');
    wp_enqueue_style ( 'oswald-font', 'https://fonts.googleapis.com/css?family=Oswald:400,900' );
}
add_action( 'enqueue_block_editor_assets', 'learnwp_gutenberg_fonts' );

// Main configuration function
function learnwp_config(){

    //Registering our menus
    register_nav_menus(
        array(
            'my_main_menu' => __('Main Menu', 'learnwp'),
            'my_footer_menu' => __('Footer Menu', 'learnwp'),
        )
    );
    $args = array(
        'height' => 225,
        'width' => 2600
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'post-formats' , array( 'video', 'image' ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' ,  array(
        'height' => 110,
        'width' => 200
    ));
    
    $textdomain = 'learnwp';
    load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/');
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/');

    //Support for Gutenberg features
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-color-palette',  array(
        array(
            'name' => __( 'Blood Red', 'learnwp' ),
            'slug' => 'blood-red',
            'color' => '#b9121b'
        ),
        array(
            'name' => __( 'White color', 'learnwp' ),
            'slug' => 'white',
            'color' => '#ffffff'
        ),
    ));
    add_theme_support( 'disable-custom-colors' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'css/style-editor.css' );
    add_theme_support( 'wp-block-styles' );
}



add_action( 'after_setup_theme', 'learnwp_config', 0 );

add_action( 'widgets_init', 'learnwp_sidebars' );

function learnwp_sidebars(){
    register_sidebar(
        array(
            'name' => __('Home Page Sidebar', 'learnwp'),
            'id' => 'sidebar-1',
            'description' => __('This is the Home Page Sidebar. You can add your widgets here. ', 'learnwp'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => __('Blog  Sidebar', 'learnwp'),
            'id' => 'sidebar-2',
            'description' => __('This is the Blog Sidebar. You can add your widgets here. ', 'learnwp'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );

    register_sidebar(
        array(
        'name' => __('Service 1', 'learnwp'),
        'id' => 'services-1',
        'description' => __('First services area. ', 'learnwp'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    )
    );
    register_sidebar(
        array(
        'name' => __('Service 2', 'learnwp'),
        'id' => 'services-2',
        'description' => __('Second services area. ', 'learnwp'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    )
    );
    register_sidebar(
        array(
        'name' => __('Service 3', 'learnwp'),
        'id' => 'services-3',
        'description' => __('Third services area. ', 'learnwp'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    )
    );
    register_sidebar(
        array(
        'name' => __('social Media Icons', 'learnwp'),
        'id' => 'social-media',
        'description' => __('Social Icons area. ', 'learnwp'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    )
    );
}

