<?php
if (!is_front_page()) {
    $title = '';

    if (is_home()) {
        $title = single_post_title('', false);
    } elseif (is_singular()) {
        $title = get_the_title();
    } elseif (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = get_the_author();
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    } elseif (is_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_search()) {
        $title = __('Search results for: ', 'Kcc-consultation') . get_search_query();
    } elseif (is_404()) {
        $title = __('404 Not Found', 'Kcc-consultation');
    }

    ?>
    <div class="bread-page">
        <img src="<?php echo esc_url(IMAGES . '/crumb-contact.jpg'); ?>" class="img-fluid" alt="<?php echo esc_html($title); ?>">
        <div class="container">
        <div class="bread-content">
                <h3><?php echo esc_html($title); ?></h3>
            </div>
        </div>
    </div>
    <?php
}
?>

    


