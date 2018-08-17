<?php

function wordpress_main_style() {
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/site.css');
}
add_action( 'wp_enqueue_scripts', 'wordpress_main_style' );




 
?>