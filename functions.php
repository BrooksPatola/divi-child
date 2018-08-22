<?php
function my_theme_enqueue_styles() {
    // bootstrap style
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// ************************ add new code here ***********************************

//adding custom javascript
function theme_js() {
    
        //bootstrap js
        wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
    
    }
 add_action( 'wp_enqueue_scripts', 'theme_js');