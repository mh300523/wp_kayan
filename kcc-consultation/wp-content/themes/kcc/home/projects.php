     <!-- our Workers -->
<?php
if (!empty(PROJECT_SETTINGS) && isset(PROJECT_SETTINGS['select_project_group_' . LANG])) {
  $projects = PROJECT_SETTINGS['select_project_group_' . LANG];
?>
     <section class="workers-home-section">
        <div class="container">
          <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
            <?php echo !empty(PROJECT_SETTINGS['projects_title_' . LANG]) ? esc_html(PROJECT_SETTINGS['projects_title_' . LANG]) : ''; ?>
          </h3>
            <p class="workers-content-one wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s"> 
              <?php echo !empty(PROJECT_SETTINGS['projects_desc_' . LANG]) ? esc_html(PROJECT_SETTINGS['projects_desc_' . LANG]) : ''; ?>
            </p>
        </div>
        <div class="work-slider">
        <div class="side-new owl-carousel wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
        <?php  
          foreach ($projects as $proj) {
              $selected_proj_id = isset($proj['proj_select']) ? $proj['proj_select'] : '';

              if ($selected_proj_id) {
                  $post = get_post($selected_proj_id);
                  setup_postdata($post);
          ?>
          
          <?php get_template_part('/template-partials/project-item'); ?>
          <?php
              }
          }
          wp_reset_postdata();
          ?>   
        </div>
        </div> 
    </section>

    <?php 
}
?>
   <!-- our Workers -->