


    <div class="bread-page">
        <img src="<?php echo esc_url(INNER_PAGES['c_banner']) ?>" class="img-fluid" alt="<?php wp_title(''); ?>">
        <div class="container">
        <div class="bread-content">
                <h3><?php wp_title(''); ?></h3>
                <p> <?php echo !empty(INNER_PAGES['c_page_caption_' . LANG]) ? esc_html(INNER_PAGES['c_page_caption_' . LANG]) : ''; ?></p>
            </div>
        </div>
    </div>


