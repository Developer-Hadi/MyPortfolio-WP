<?php

function add_css_js_scripts(){
    wp_enqueue_style( 'main-css', get_template_directory_uri(). '/css/style.css', [], time(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'add_css_js_scripts' );

?>