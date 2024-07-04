<?php include(HEADER); ?>
    <div class="archive-page-single">

    <!-- breadcrumbs -->
    <?php get_template_part('/common/breadcrumbs/default-bread'); ?>
    <!-- breadcrumbs -->
    <div id="content">
        <section class="single-work-section">
            <div class="container">
                <div class="single-work-title">
                    <h2> <?php esc_html(the_title()); ?></h2>
                </div>
                <div class="single-work-flex">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="img-fluid" alt="<?php esc_html(the_title()); ?>">
                    <p><?php esc_html(the_content()); ?></p>
                </div>
                </div>

            </div>
        </section>
    </div>
    </div>
<?php include(FOOTER); ?>