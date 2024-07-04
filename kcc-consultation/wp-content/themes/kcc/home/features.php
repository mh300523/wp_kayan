  <!-- Our Company -->
  <?php  
        if (!empty(Features_options) && isset(Features_options['features_group'])) {
          $Features = Features_options['features_group_' . LANG];
    ?>
  <section class="our-company-home">
    <div class="img-company wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s">
      <img src="<?php echo esc_url(IMAGES . '/eleve1.png'); ?>" class="img-fluid" alt="#">
    </div>
    <div class="container">
      <div class="company-content wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.8s">
        
      </div>
      <div class="company-flex">
        <?php  
            foreach ($Features as $feature) {
        ?>
        <div class="comp-one wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.0s">
            <div class="comp-photo">
              <img src="<?php echo esc_url($feature['feature_img']); ?>" class="img-fluid" alt="<?php echo esc_html($feature['feature_title']); ?>">
            </div>
            <h4> <?php echo esc_html($feature['feature_title']); ?></h4>
            <p><?php echo esc_html($feature['feature_desc']); ?> </p>
            
        </div>
        <?php  
        }
    
    ?> 
      </div>
    </div>
   </section>

   <?php  
        }
    
    ?> 
  <!-- Our Company -->