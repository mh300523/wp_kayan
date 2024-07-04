<?php
/*
*
* Template Name: Contact Us
*
*/
?>

<?php include(HEADER); ?>

<div class="contact-us-page">
    <!-- breadcrumbs -->
    <?php get_template_part('/common/breadcrumbs/contact-bread'); ?>
    <!-- breadcrumbs -->
    <div id="content">
   <!-- contact-us -->
    <section class="contact-us-page">
        <div class="img-vision wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.8s">
            <img src="<?php echo esc_url(IMAGES . '/vision-hook.png'); ?>" class="img-fluid" alt="image">
        </div>
        <div class="container">
            <div class="contact-us-flex">
                <div class="contact-add">
                    <div class="cont-flex">
                        <div class="cont-title">
                        <?php
                            $c_head = INNER_PAGES['c_page_head_' . LANG];
                           
                            if (!empty($c_head)) {
                                // Explode the content by newline to separate different parts
                                $parts = explode("\n", $c_head);
                            
                                // Output the parts in the desired HTML structure
                                if (!empty($parts[0])) {
                                    echo '<span>' . $parts[0] . '</span>';
                                }
                                if (!empty($parts[1])) {
                                    echo '<h3>' . $parts[1] . '</h3>';
                                }
                                if (!empty($parts[2])) {
                                    echo '<p>' . $parts[2] . '</p>';
                                }
                            }
                        ?>
                            
                        </div>
                        <div class="cont-add">
                            <div class="con-one">
                                <div class="con-icon">
                                    <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_20_686)">
                                        <path d="M31.6726 16.251C30.9823 16.251 30.4227 15.6914 30.4227 15.0011C30.4227 8.10944 24.8159 2.50258 17.9242 2.50258C17.2339 2.50258 16.6743 1.94302 16.6743 1.25273C16.6743 0.562432 17.2339 0.00287113 17.9242 0.00287113C25.986 -0.163672 33.0891 6.93938 32.9223 15.0013C32.9224 15.6914 32.3629 16.251 31.6726 16.251ZM22.9236 15.0011C22.9236 12.2445 20.6808 10.0017 17.9242 10.0017C17.2339 10.0017 16.6743 10.5613 16.6743 11.2516C16.6743 11.9419 17.2339 12.5014 17.9242 12.5014C19.3025 12.5014 20.4239 13.6228 20.4239 15.0011C20.4239 15.6914 20.9834 16.251 21.6737 16.251C22.364 16.251 22.9236 15.6914 22.9236 15.0011ZM27.923 15.0011C27.923 9.48778 23.4376 5.0023 17.9242 5.0023C17.2339 5.0023 16.6743 5.56186 16.6743 6.25215C16.6743 6.94245 17.2339 7.50201 17.9242 7.50201C22.0592 7.50201 25.4233 10.8661 25.4233 15.0011C25.4233 15.6914 25.9829 16.251 26.6732 16.251C27.3634 16.251 27.923 15.6914 27.923 15.0011ZM22.9508 31.9995C23.2726 31.9923 23.5793 31.8613 23.8069 31.6337L28.3063 27.1342C28.7944 26.6461 28.7944 25.8548 28.3063 25.3667L21.5103 18.5706C21.0222 18.0825 20.2308 18.0825 19.7427 18.5706L18.0476 20.2657C16.3521 19.4506 13.4438 16.5316 12.6552 14.8392L14.3333 13.1612C14.8174 12.6957 14.8174 11.859 14.3333 11.3936L7.49623 4.55653C7.0081 4.0684 6.21676 4.0684 5.72869 4.55653L1.2917 8.99352C1.06248 9.22274 0.931241 9.53208 0.925804 9.85623C0.906431 19.0171 13.33 31.8854 22.8955 32C22.922 32 22.9407 31.9997 22.9508 31.9995ZM6.61246 7.20792L11.6819 12.2774L10.2906 13.6687C9.97539 13.9839 9.8519 14.4433 9.96657 14.8741C10.6228 17.5132 15.4183 22.3022 18.0059 22.9583C18.437 23.0741 18.8977 22.9508 19.2136 22.6349L20.6265 21.222L25.655 26.2505L22.4303 29.4751C15.4986 29.069 4.35078 19.4326 3.45451 10.3658L6.61246 7.20792Z" fill="#FF792D"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_20_686">
                                        <rect width="32" height="32" fill="white" transform="translate(0.924805)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <?php if (!empty(SITE_TELEPHONE)) { ?>
                                <div class="con-title">
                                    <span> <?php echo pll__('رقم الجوال '); ?></span>
                                    <h5><?php echo esc_attr(SITE_TELEPHONE) ?></h5>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="con-one">
                                <div class="con-icon">
                                    <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.68802 14.9675C1.77518 19.055 1.81877 21.0986 3.32694 22.6126C4.8351 24.1264 6.9341 24.1791 11.1321 24.2846C13.7194 24.3496 16.2813 24.3496 18.8686 24.2846C23.0666 24.1791 25.1655 24.1264 26.6738 22.6126C28.1819 21.0986 28.2255 19.055 28.3126 14.9675C28.3407 13.6532 28.3407 12.3468 28.3126 11.0326C28.2255 6.94517 28.1819 4.90148 26.6738 3.38757C25.1655 1.87366 23.0666 1.82093 18.8686 1.71545C16.2813 1.65044 13.7194 1.65044 11.1321 1.71544C6.9341 1.8209 4.8351 1.87364 3.32693 3.38756C1.81875 4.90146 1.77518 6.94515 1.68801 11.0326C1.65998 12.3468 1.65999 13.6532 1.68802 14.9675Z" stroke="#FF792D" stroke-width="1.5" stroke-linejoin="round"/>
                                    </svg>
 
                                </div>
                                <?php if (!empty(SITE_EMAIL)) { ?>
                                <div class="con-title">
                                    <span>  <?php echo pll__('البريد الالكتروني'); ?></span>
                                    <h5><?php echo esc_html(SITE_EMAIL) ?></h5>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="con-one">
                                <div class="con-icon">
                                    <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.875 17.0208C26.875 19.9894 24.4686 22.3958 21.5 22.3958C18.5314 22.3958 16.125 19.9894 16.125 17.0208C16.125 14.0522 18.5314 11.6458 21.5 11.6458C24.4686 11.6458 26.875 14.0522 26.875 17.0208Z" stroke="#FF792D" stroke-width="2.01562"/>
                                        <path d="M21.5 3.58325C28.772 3.58325 34.9375 9.72514 34.9375 17.1764C34.9375 24.7464 28.6717 30.0587 22.8841 33.6711C22.4623 33.9138 21.9854 34.0416 21.5 34.0416C21.0146 34.0416 20.5377 33.9138 20.1159 33.6711C14.3392 30.0234 8.0625 24.7726 8.0625 17.1764C8.0625 9.72514 14.228 3.58325 21.5 3.58325Z" stroke="#FF792D" stroke-width="2.01562"/>
                                        <path d="M32.25 35.8333C32.25 37.8123 27.437 39.4166 21.5 39.4166C15.5629 39.4166 10.75 37.8123 10.75 35.8333" stroke="#FF792D" stroke-width="2.01562" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <?php if (!empty(ADDRESS)) { ?>
                                <div class="con-title">
                                <span> <?php echo pll__('العنوان'); ?></span>
                                    <h5><?php echo esc_html(ADDRESS); ?></h5>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
                <?php get_template_part('/forms/contact-us'); ?>
            </div>
            <div class="contact-map">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="480px" id="gmap_canvas" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.118818726602!2d39.25657046980724!3d21.503065427733823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3cd7737d24ceb%3A0xfcabfd6239597f1!2z2LTYsdmD2Kkg2YPZitin2YYg2KfZhNiq2LTZitmK2K8g2YTZhNmF2YLYp9mI2YTYp9iq!5e0!3m2!1sen!2seg!4v1719398153809!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <?php if (!empty(ADDRESS)) { ?>
            <div class="box-add">
            <span> <?php echo pll__('العنوان'); ?></span>
                <p><?php echo esc_html(ADDRESS); ?>
                </p>
            </div>
            <?php } ?>
        </div>
    </section>
   <!-- contact-us -->
    </div>
</div>
<?php include(FOOTER); ?>



