<?php
function my_theme_enqueue_styles() {
    

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// ************************ add new code here ***********************************



 //* Enqueue Animate.CSS and WOW.js
add_action( 'wp_enqueue_scripts', 'sk_enqueue_scripts' );
function sk_enqueue_scripts() {
 
	wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' );
 
	wp_enqueue_script( 'wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '', true );
 

}
 

//* Enqueue script to activate WOW.js
add_action('wp_enqueue_scripts', 'sk_wow_init_in_footer');
function sk_wow_init_in_footer() {
	add_action( 'print_footer_scripts', 'wow_init' );
}
 

//* Add JavaScript before </body> 
function wow_init() { ?>

	<script type="text/javascript">
		new WOW().init();
    </script>

<?php }


/* 
remove parent theme styles/scripts

function PREFIX_remove_scripts() {
    wp_dequeue_style( 'screen' );
    wp_deregister_style( 'screen' );

    wp_dequeue_script( 'site' );
    wp_deregister_script( 'site' );

    // Now register your styles and scripts here
}
add_action( 'wp_enqueue_scripts', 'PREFIX_remove_scripts', 20 ); */