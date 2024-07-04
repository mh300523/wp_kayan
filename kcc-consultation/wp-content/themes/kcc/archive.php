<?php include(HEADER); ?>
<div class="default-page-archive">
    <!-- breadcrumbs -->
    <?php get_template_part('/common/breadcrumbs/default-bread'); ?>
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
          
            <?php get_template_part('/template-partials/default-item'); ?>
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



