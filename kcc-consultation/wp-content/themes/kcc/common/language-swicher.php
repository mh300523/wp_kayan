<?php
// Define the mapping for slugs to display formats
$slug_display_mapping = array(
    'ar' => 'ع',
    'en' => 'EN',
    // Add other languages as needed
);

// Get the list of languages
$languages = pll_the_languages(array(
    'display_names_as' => 'slug',
    'raw' => 1
));

if ($languages) :
    foreach ($languages as $lang) :
        // Check if the language is not the current one
        if (!$lang['current_lang']) :
            // Get the display format from the mapping array
            $display_slug = isset($slug_display_mapping[$lang['slug']]) ? $slug_display_mapping[$lang['slug']] : strtoupper($lang['slug']);
            ?>
            <a href="<?= esc_url($lang['url']) ?>" class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.8s">
                <?= esc_html($display_slug) ?> <i class="uil uil-globe"></i>
            </a>
        <?php
        endif;
    endforeach;
endif;
?>

