<?php 

//Including stylesheet and script files
function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js', array( 'jquery' ), '5.1.1', true);
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css', array(), '5.1.1', 'all' );
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );

}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


// Main configuration function
function learnwp_config(){

    //Registering our menus
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'my_footer_menu' => 'Footer Menu',
        )
    );
    $args = array(
        'height' => 225,
        'width' => 2600
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails');
}



add_action( 'after_setup_theme', 'learnwp_config', 0 );