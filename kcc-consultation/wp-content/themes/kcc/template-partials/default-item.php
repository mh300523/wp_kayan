<?php if (have_posts()) : ?>
    <div class="work-grid">
    <?php
    while (have_posts()) : the_post();
    ?>
    <div class="work-flex-photo">
        <div class="work-item">
            <a href="<?php echo esc_url(get_permalink() );?>">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>" class="img-fluid" alt="<?php echo esc_html(get_the_title()); ?>">
            </a>
            <div class="work-text">
            <a href="<?php echo esc_url(get_permalink() );?>"><?php echo esc_html(get_the_title()); ?></a>
            </div>  
        </div>
    </div>
    <?php
        endwhile;
    ?>

    </div>
<?php endif; ?>