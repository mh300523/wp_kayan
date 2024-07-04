<?php include(HEADER); ?>
<div class="works-page-archive">
    <!-- breadcrumbs -->
    <?php get_template_part('/common/breadcrumbs/works-bread'); ?>

    <!-- breadcrumbs -->
    <div id="content">
             <!-- Work-section -->
      <section class="work-section-page">
      <?php if (!empty(SITE_TELEPHONE)) { ?>
        <div class="box-con">
          <span><?php echo pll__('تواصل معنا'); ?> </span>
          <p><?php echo esc_attr(SITE_TELEPHONE) ?></p>
      </div>
      <?php } ?>
        <div class="container">
          <div class="work-flex">
            <div class="work-title">
            <?php
              $content_head = INNER_PAGES['works_content_title_' . LANG];
              if (!empty($content_head)) {
                $head = explode("\n", $content_head);

                if (!empty($head[0])) {
                    echo '<span>' . esc_html(trim($head[0])) . '</span>';
                }
                if (!empty($head[1])) {
                    echo '<h3>' . esc_html(trim($head[1])) . '</h3>';
                }
              }
            ?>

            </div>
            <div class="work-title-one">
              <p>
                  <?php echo !empty(INNER_PAGES['works_content_' . LANG]) ? esc_html(INNER_PAGES['works_content_' . LANG]) : ''; ?>
              </p>
            </div>
          </div>
            <?php get_template_part('/template-partials/works-item'); ?>
          <!-- Pagination -->
          <div class="pagination-cont">
            <?php get_template_part('/common/pagination'); ?>
          </div>
        </div>
      </section>
     <!-- Work-section -->
    </div>
</div>
<?php include(FOOTER); ?>



