<?php  
    $services = SERVICE_SETTINGS['services_group_' . LANG]; 
    foreach ($services as $service) {
    $term_id = $service['service_select'];
    $term = get_term($term_id);
    $term_name = $term ? $term->name : '';
    $term_url = $term ? get_term_link($term) : '#';
?>
<div class="service-item">
    <div class="service-one">
    <a href="<?php echo esc_url($term_url); ?>">
        <div class="serv-img">
            <img src="<?php echo esc_url($service['service_img']); ?>" class="img-fluid" alt="service">
        </div>
        <div class="serv-title">
            <h3><?php echo esc_html($term_name); ?> </h3>
            <div class="serv-i">
            <i class="uil-arrow-up-right"></i>
            </div>
        </div>
        </a>
    </div>
</div>

<?php  
    }

?> 


