<div class="foot-social wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
    <?php
            if (!empty(SOCIALS)) {
                foreach (SOCIALS['social_media'] as $socials) {
    ?>
    <a href="<?php echo esc_url($socials['social_url']) ?>" target="_blank">
        <i class="fa-brands fa-<?php echo esc_attr($socials['social_name']) ?>"></i>
    </a>


    <?php
            }
        }

    ?>
</div>