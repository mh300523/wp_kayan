<?php
//add custom body class
function add_custom_body_classes($classes) {
    if (!is_home()) {
        // Add the custom class only if not on the home page
        $classes[] = 'inner-page';
    }
    return $classes;
}
add_filter('body_class', 'add_custom_body_classes');

//add theme menus
function start_theme_register_menus() {

    register_nav_menus (
        array (
            'navbar_menu'  => __( 'Navbar Menu', 'Kcc-consultation' ),
            'footer_menu1'  => __( 'Footer Menu-1', 'Kcc-consultation' ),
            'footer_menu2'  => __( 'Footer Menu-2', 'Kcc-consultation' ),
        )
    );
}

add_action( 'init', 'start_theme_register_menus' );


// Add theme support
function start_theme_supports() {
	//add widgets
    add_theme_support('widgets');
	//add featured-image
    add_theme_support('post-thumbnails');
	//add html5
	add_theme_support('html5', array(
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption',
	));
	remove_filter( 'the_content', 'wpautop' );
}
add_action('after_setup_theme', 'start_theme_supports');


//Custom Menu Walker fow navbar menu
class Custom_Menu_Walker extends Walker_Nav_Menu {
    private $wow_delay = 0.5; // Initialize the delay counter

    // Override start_lvl to add dropdown menu classes
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"dropdown-menu nav-head\">\n";
    }

    // Override start_el to add classes and attributes
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        // Check if current item has children
        $has_children = ! empty( $item->classes ) && in_array( 'menu-item-has-children', $item->classes );

        // Conditionally add classes and attributes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        // Conditionally add dropdown-head class if item has children
        if ( $has_children ) {
            $classes[] = 'dropdown-head'; // Add dropdown-head class
        }

        // Add wow fadeInRight classes and attributes if it's a top-level item
        if ( $depth == 0 ) {
            $classes[] = 'wow';
            $classes[] = 'fadeInDown';
            $attributes = ' data-wow-duration="1s" data-wow-delay="' . $this->wow_delay . 's"';
            $this->wow_delay += 0.1; // Increment the delay by 0.1 seconds
        } else {
            $attributes = '';
        }

        // Ensure $args is an object
        $args = (object) $args;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        // Build HTML output
        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $class_names . $attributes . '>';

        // Output link
        $item_output = $args->before;
        $item_output .= '<a';
        $item_output .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

        // Add data-toggle and dropdown-toggle class if it's a dropdown-head
        if ( $has_children ) {
            $item_output .= ' data-toggle="dropdown" class="dropdown-toggle"';
        }

        $item_output .= '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

        // Add the icon if it's a dropdown-head
        if ( $has_children ) {
            $item_output .= ' <i class="uil uil-angle-down"></i>';
        }

        $item_output .= '</a>';
        $item_output .= $args->after;

        // Append item output to the output
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
//enable svg images 
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// function to return all pages
function start_theme_get_all_pages( $args ) {
    $pages = get_pages();
    $page_options = array();

    foreach ( $pages as $page ) {
        $page_options[ $page->ID ] = $page->post_title;
    }

    return $page_options;
}

// function to return all terms in services tab in page options
function get_works_terms_options() {
    $terms = get_terms( array(
        'taxonomy'   => 'categories',
        'hide_empty' => false,
    ) );

    // $terms = get_the_terms(get_the_ID(), 'categories');

    $options = array();
    if ( $terms && !is_wp_error( $terms ) ) {
        foreach ( $terms as $term ) {
            $options[ $term->term_id ] = $term->name;
        }
    }

    return $options;
}


// function to return all posts in post type works
function get_works_options() {
    $works = get_posts( array(
        'post_type'      => 'work',
        'posts_per_page' => -1, 
        // Add any additional parameters if needed
    ) );

    $options = array();

    foreach ( $works as $work ) {
        $options[ $work->ID ] = $work->post_title;
    }

    return $options;
}



class Custom_Footer_Walker extends Walker_Nav_Menu {

    // Start level output
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"list-unstyled list-inline\">\n";
    }

    // Start element output
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ( $depth ) ? str_repeat("\t", $depth) : '';

        // Initialize attributes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ));
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        // Initialize attributes for anchor tag
        $attributes = '';
        $attributes .= ' class="hvr-backward wow fadeInUp"'; // Example classes

        // Calculate data-wow-delay dynamically
        $delay = 0.4 + ($depth * 0.1);
        $attributes .= ' data-wow-duration="1s" data-wow-delay="' . number_format($delay, 1, '.', '') . 's"'; // Example data attributes

        // Output menu item
        $output .= $indent . '<li' . $class_names . '>';
        $output .= '<a href="' . $item->url . '"' . $attributes . '>' . $item->title . '</a>';

    }

    // End element output
    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }

    // End level output
    function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}