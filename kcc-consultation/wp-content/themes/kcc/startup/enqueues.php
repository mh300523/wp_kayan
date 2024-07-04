<?php

define('THEMEPATH', get_template_directory_uri());

define('STYLES', THEMEPATH . '/assets/css');
define('SCRIPTS', THEMEPATH . '/assets/js');
define('IMAGES', THEMEPATH . '/assets/images');

// Load styles and scripts
function start_theme_enqueue_scripts() {

	//deregister default jquery
	wp_deregister_script('jquery');

    // Register scripts
	wp_register_script('custom-jquery', SCRIPTS . '/jquery.min.js', array(), '3.6.0', true);
    wp_register_script('popper-js', SCRIPTS . '/popper.min.js', array('custom-jquery'), false, true);
    wp_register_script('bootstrap-js', SCRIPTS . '/bootstrap.min.js', array('custom-jquery'), false, true);
    wp_register_script('owl-js', SCRIPTS . '/owl.carousel.min.js', array('custom-jquery'), false, true);
	wp_register_script('wow-js', SCRIPTS . '/wow.min.js', array('custom-jquery'), false, true);
    wp_register_script('newsletter-ajax', SCRIPTS . '/newsletter-ajax.js', array('custom-jquery'), null, true);
    wp_register_script('contact-ajax', SCRIPTS . '/contact-ajax.js', array('custom-jquery'), null, true);
	wp_register_script('custom-script-js', SCRIPTS . '/main.js', array('custom-jquery'), false, true);


    wp_localize_script('newsletter-ajax', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
    wp_localize_script('contact-ajax', 'ajax_object2', array('ajax_url' => admin_url('admin-ajax.php')));


    // Enqueue scripts
	wp_enqueue_script('custom-jquery');
    wp_enqueue_script('popper-js');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('owl-js');
	wp_enqueue_script('wow-js');
    wp_enqueue_script('newsletter-ajax');
    wp_enqueue_script('contact-ajax');
    wp_enqueue_script('custom-script-js');


    // Load stylesheets
    wp_enqueue_style('owl', STYLES . '/owl.carousel.min.css');
    wp_enqueue_style('lineawesome', STYLES . '/line-awesome.css');
    wp_enqueue_style('unicons', STYLES . '/unicons.css');
    wp_enqueue_style('fontawesome', STYLES . '/all.min.css');
    wp_enqueue_style('animate', STYLES . '/animate.css');
    wp_enqueue_style('hover', STYLES . '/hover-min.css');
    if (is_rtl()) {
        wp_enqueue_style('bootstrap-rtl', STYLES . '/bootstrap.rtl.min.css');
    } else {
        wp_enqueue_style('bootstrap', STYLES . '/bootstrap.min.css');
    }
	wp_enqueue_style('stylesheet', THEMEPATH . '/style.css');
	wp_enqueue_style('custom-style', STYLES . '/main.css');
    wp_enqueue_style('custom', STYLES . '/custom.css');
}

add_action('wp_enqueue_scripts', 'start_theme_enqueue_scripts');



