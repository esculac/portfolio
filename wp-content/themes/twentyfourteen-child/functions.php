<?php
function add_post_formats() {
    add_theme_support( 'post-formats', array( 'gallery', 'quote', 'video', 'aside', 'image', 'link' ) );
}
 
add_action( 'after_setup_theme', 'add_post_formats', 20 );



//* Enqueue Animate.CSS and WOW.js

add_action( 'wp_enqueue_scripts', 'sk_enqueue_scripts' );

function sk_enqueue_scripts() {
	wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/css/animate.min.css' );

	wp_enqueue_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), '', true );
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


?>