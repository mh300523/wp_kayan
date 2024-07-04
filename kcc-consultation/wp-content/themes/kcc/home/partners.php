     <!-- partners -->
     <?php  
        if (!empty(PARTNERS_GALLERY)) {
    ?>
<section class="partners-main">

<div class="feat-text">
  <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
    <?php echo !empty(PARTNERS_GALLERY['partners_title_' . LANG]) ? esc_html(PARTNERS_GALLERY['partners_title_' . LANG]) : ''; ?>
  </h2>
</div>
<div class="partner_slider owl-carousel wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
    <?php
        foreach (PARTNERS_GALLERY['partners_images'] as $partner_id => $partner_url) {
    ?>
  <div class="item partner">
      <div class="br_photo">
        <a href="#!">
          <img src="<?php echo esc_url($partner_url) ?>" class="img-fluid" alt="partner">
        </a>
      </div>
  </div>
  <?php
               
            }
        ?>
        
 

</div>
</section>
<?php  
        }
    
    ?> 
<!-- partners -->