  <!-- Slider -->
  <?php  
        if (!empty(MAIN_SLIDER['slider_group_' . LANG])) {
            $sliders = MAIN_SLIDER['slider_group_' . LANG];
    ?>
  <div class="side-slider">
    <div class="slider-head owl-carousel">
        <?php  
            foreach ($sliders as $slide) {
        ?>
        <div class="slider-item">
            <div class="photo-head">
                <img src="<?php echo esc_url($slide['slider_img']); ?>" class="img-fluid" alt="slider">
            </div>
            <div class="slider-title">
                    <div class="container">
                        <div class="slider-ti">
                            <h2><?php echo !empty($slide['slider_title']) ? esc_html($slide['slider_title']) : ''; ?></h2>
                            <h4><?php echo !empty($slide['slider_description']) ? esc_html($slide['slider_description']) : ''; ?></h4>
                            <a href="<?php echo esc_url(get_permalink($slide['select_more']) );?>"><?php echo pll__('المزيد'); ?></a>
                        </div>
                    </div>
            </div>
        </div>
        <?php  
            }
        ?>  
     </div>
  </div>
  <?php  
        }
    
    ?> 
  <!-- Slider -->