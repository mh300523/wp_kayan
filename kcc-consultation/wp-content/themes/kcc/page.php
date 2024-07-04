

<?php include(HEADER); ?>
<div class="default-page">
    <!-- breadcrumbs -->
    <?php get_template_part('/common/breadcrumbs/default-bread'); ?>
    <!-- breadcrumbs -->
    <div id="content">
        <div class="container">
            <div class="page-wrapper">
                <div class="page-content fixall">    
                    <?php esc_html(the_content()); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include(FOOTER); ?>