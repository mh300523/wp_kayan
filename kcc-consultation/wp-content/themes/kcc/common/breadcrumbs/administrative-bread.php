<div class="bread-page">
    <img src="<?php echo esc_url(INNER_PAGES['O_banner']) ?>" class="img-fluid" alt="<?php echo !empty(INNER_PAGES['o_page_title_' . LANG]) ? esc_html(INNER_PAGES['o_page_title_' . LANG]) : ''; ?>">
    <div class="container">
    <div class="bread-content">
            <h3> <?php echo !empty(INNER_PAGES['o_page_title_' . LANG]) ? esc_html(INNER_PAGES['o_page_title_' . LANG]) : ''; ?> </h3>
            <p><?php echo !empty(INNER_PAGES['o_page_caption_' . LANG]) ? esc_html(INNER_PAGES['o_page_caption_' . LANG]) : ''; ?></p>
        </div>
    </div>
</div>