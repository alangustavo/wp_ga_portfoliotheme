<?php 

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

// Load my Scripts
function my_scripts() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', '4.5.3', 'all');
    wp_enqueue_script( 'bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ),'4.5.3', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

register_nav_menus( array('my_main_menu' => "Main Menu", "my_footer_menu" => "Footer Menu") );