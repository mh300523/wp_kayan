   <!-- Our-services -->
    <?php
      if (!empty(SERVICE_SETTINGS['services_group_' . LANG])) {
    ?>
   <section class="services-home">
      <div class="service-flex">
      
          <?php get_template_part('/template-partials/service-item'); ?>
      

      </div>
    </section>
    <?php  
        }
    
    ?> 
   <!-- Our-services -->