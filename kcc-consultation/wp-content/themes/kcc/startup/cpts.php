<?php
// Register Works post type
register_post_type('work', array(
    'labels' => array(
        'name'                  => pll__('Works', 'Kcc-consultation'),
        'singular_name'         => pll__('Work', 'Kcc-consultation'),
        'add_new'               => pll__('Add New Work', 'Kcc-consultation'),
        'add_new_item'          => pll__('Add New Work', 'Kcc-consultation'),
        'new_item'              => pll__('New Work', 'Kcc-consultation'),
        'edit_item'             => pll__('Edit Work', 'Kcc-consultation'),
        'view_item'             => pll__('View Work', 'Kcc-consultation'),
        'all_items'             => pll__('Works', 'Kcc-consultation'),
        'search_items'          => pll__('Search Work', 'Kcc-consultation'),
    ),
    'public'            => true,
    'has_archive'       => true,
    'menu_icon'         => 'dashicons-admin-post',
    'menu_position'     => 11,
    // 'show_in_rest'      => true,
    'supports'          => array( 'title', 'editor', 'thumbnail' ),
    'rewrite'           => array('slug' => 'work'),
));

// Register Newsletter post type
register_post_type('newsletter', array(
    'labels' => array(
        'name'                  => pll__('Newsletter', 'Kcc-consultation'),
        'singular_name'         => pll__('Newsletter', 'Kcc-consultation'),
        'add_new'               => pll__('Add New', 'Kcc-consultation'),
        'add_new_item'          => pll__('Add New', 'Kcc-consultation'),
        'all_items'             => pll__('All Newsletters', 'Kcc-consultation'),
        'search_items'          => pll__('Search Email', 'Kcc-consultation'),
    ),
    'public'            => false,
    'has_archive'       => false,
    'exclude_from_search' => true, // Exclude from search results
    'publicly_queryable' => false, // Disable queries from front end
    'menu_icon'         => 'dashicons-email',
    'menu_position'     => 20,
    'show_in_rest'      => true,
    'supports'          => array( 'title' ),
    'rewrite'           => array('slug' => 'newsletter'),
    'show_ui'           => true, // Show in admin panel
));


// Register Newsletter post type
register_post_type('contact', array(
    'labels' => array(
        'name'                  => pll__('Contacts', 'Kcc-consultation'),
        'singular_name'         => pll__('contact', 'Kcc-consultation'),
        'add_new'               => pll__('Add New', 'Kcc-consultation'),
        'add_new_item'          => pll__('Add New', 'Kcc-consultation'),
        'all_items'             => pll__('Contacts', 'Kcc-consultation'),
        'search_items'          => pll__('Search', 'Kcc-consultation'),
    ),
    'public'            => false,
    'has_archive'       => false,
    'exclude_from_search' => true, // Exclude from search results
    'publicly_queryable' => false, // Disable queries from front end
    'menu_icon'         => 'dashicons-email',
    'menu_position'     => 21,
    'show_in_rest'      => true,
    'supports'          => array( 'title' ),
    'rewrite'           => array('slug' => 'contact'),
    'show_ui'           => true, // Show in admin panel
));

// Register custom taxonomies
function start_theme_register_taxonomies() {
    // Taxonomy 1: Projects
    register_taxonomy('categories', 'work', array(
		'labels'             => array(
            'name'                  => pll__('Works Categories', 'Kcc-consultation'),
			'singular_name'         => pll__('Work Category', 'Kcc-consultation'),
			'add_new_item'          => pll__( 'Add New Category', 'Kcc-consultation'),
            'new_item'              => pll__('New Category', 'Kcc-consultation'),
            'edit_item'             => pll__('Edit Category', 'Kcc-consultation'),
            'view_item'             => pll__('View Category', 'Kcc-consultation'),
            'all_items'             => pll__('all Categories', 'Kcc-consultation'),
            'search_items'          => pll__('Search Categories', 'Kcc-consultation'),
        ),
        'hierarchical' => false,
		'public'       => true,
        'rewrite' => array('slug' => 'works_categories'),
    ));

    // Add more taxonomies as needed
}
add_action('init', 'start_theme_register_taxonomies');