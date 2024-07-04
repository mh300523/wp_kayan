    <!-- Our-vision -->
    <?php  
        if (!empty(VISION_SETTINGS)) {
    ?>

<section class="our-vision-home">

<div class="img-vision wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.8s">
  <img src="<?php echo esc_url(IMAGES . '/vision-hook.png'); ?>" class="img-fluid" alt="image">
</div>
<div class="vision-flex">
  <div class="vision-photo wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.8s">
    <img src="<?php echo esc_url(VISION_SETTINGS['vision_img']); ?>" class="img-fluid" alt="#">
  </div>
  <div class="vision-title">
    <div class="vi-bg">
      <img src="<?php echo esc_url(IMAGES . '/bg-vision.png'); ?>" class="img-fluid" alt="bg">
    </div>
    <?php  
        if (!empty(VISION_SETTINGS['vision_tabs_group_' . LANG])) {
        $visions = VISION_SETTINGS['vision_tabs_group_' . LANG];
        
            foreach ($visions as $vis) {

               
    ?>
    <div class="tabs-sec" id="vision-k">
          <ul class="tab-ul fixall list-unstyled">
            <li class="tab-li wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
              <a tabindex="" class="tab-a fixall active" data-filter="one">
                <?php echo !empty($vis['tab_title_1']) ? esc_html($vis['tab_title_1']) : ''; ?>
              </a>
            </li>
            <li class="tab-li wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
              <a tabindex="" class="tab-a fixall" data-filter="two">
                <?php echo !empty($vis['tab_title_2']) ? esc_html($vis['tab_title_2']) : ''; ?>
              </a>
            </li>
          </ul>
          <div class="vision-grid">
            <div class="vision one active">
              <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                 <?php echo !empty($vis['tab_content_1']) ? esc_html($vis['tab_content_1']) : ''; ?>
              </p> 
              <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.0s">
                <?php echo !empty($vis['tab_content_1_1']) ? esc_html($vis['tab_content_1_1']) : ''; ?>
              </span>

              <ul class="vision-list wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
              <?php 
                $content_list = $vis['tab_content_1_2'];

                if (!empty($content_list)) {
                  $list = $content_list = explode("\n", $content_list);

                  foreach ($list as $li) {
                      // Trim any whitespace
                      $li = trim($li);
              
                      // Skip empty items
                      if (!empty($li)) {
                          echo '<li>' . esc_html($li) . '</li>';
                      }
                  }
                }
              ?>
              </ul>
            </div>
            <div class="vision two">
              <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                 <?php echo !empty($vis['tab_content_2']) ? esc_html($vis['tab_content_2']) : ''; ?>
              </p> 
              <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.0s">
                <?php echo !empty($vis['tab_content_2_1']) ? esc_html($vis['tab_content_2_1']) : ''; ?>
              </span>
            </div>
          </div>
    </div>
    <?php  
       }
    }
    ?>
  </div>
</div>
</section>
<!-- Our-vision -->
<?php  
        }
    ?>