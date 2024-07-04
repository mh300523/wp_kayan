<?php
global $wp_query;

$all_pages = $wp_query->max_num_pages; // Get the total number of pages
$current_page = max(1, get_query_var('paged')); // Get current page number

// Check if there are more than 1 page
if ($all_pages > 1) {
    echo paginate_links(array(
        'base' => get_pagenum_link() . '%_%',
        'format' => '/page/%#%',
        'current' => $current_page,
        'prev_text' => __( '<span aria-hidden="true">&laquo;</span>'),
        'next_text' => __( '<span aria-hidden="true">&raquo;</span>'),
        'mid_size'  => 2,
        'end_size'  => 2,
    ));
}
?>


