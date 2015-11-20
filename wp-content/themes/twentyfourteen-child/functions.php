<?php
function add_post_formats() {
    add_theme_support( 'post-formats', array( 'gallery', 'quote', 'video', 'aside', 'image', 'link' ) );
}
 
add_action( 'after_setup_theme', 'add_post_formats', 20 );
?>