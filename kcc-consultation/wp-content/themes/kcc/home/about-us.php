   <!-- About-Home -->
   <?php  
        if (!empty(COMPANY_DATA)) {  
    ?>
   <section class="about-home-section">
      <div class="img-hook wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.8s">
        <img src="<?php echo esc_url(IMAGES . '/hook-about.svg'); ?>">
      </div>
      <div class="img-bottom">
        <img src="<?php echo esc_url(IMAGES . '/about-v.svg'); ?>">
      </div>

      <div class="container">
        <div class="about-home-flex">
          <div class="about-home-title">
            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <?php 
                $Title = COMPANY_DATA['about_title_' . LANG];
                echo !empty($Title) ? esc_html($Title) : ''; 
              ?>
            </h3>
            <p class="about-content-one wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
               <?php
                 $Goal = COMPANY_DATA['about_goal_' . LANG];
                echo !empty($Goal) ? esc_html($Goal) : ''; 
                ?>
            </p>
            <?php  
                
                if (!empty(COMPANY_DATA['about_stats_' . LANG])) {
                  $statistics = COMPANY_DATA['about_stats_' . LANG];
            ?>
            <div class="about-count">
            <?php  
                foreach ($statistics as $stat) {
            ?>
              <div class="count-one wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                <h4> + <?php echo esc_html($stat['statistic_value']); ?></h4>
                <span><?php echo esc_html($stat['statistic_name']); ?></span>
              </div>
              <?php  
                    }
                ?>  
            </div>
            <?php  
                }
            ?>  
            <p class="about-content-two wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
                <?php 
                  $Plan = COMPANY_DATA['about_plan_' . LANG];
                  echo !empty($Plan) ? esc_html($Plan) : ''; 
                  ?>
            </p>
            <a href="<?php echo esc_url(get_permalink(COMPANY_DATA['page_select_' . LANG]) );?>" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><?php echo pll__('المزيد'); ?></a>
          </div>
          <div class="about-home-photo wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo esc_url(COMPANY_DATA['about_img']); ?>" class="img-fluid" alt="about">
          </div>
        </div>
      </div>
      
    </section>
    <?php  
        }
    ?>
   <!-- About-Home -->