<?php
/*
*
* Template Name: administrative
*
*/
?>
<?php include(HEADER); ?>

    <div class="administrative-page">
          <!-- breadcrumbs -->
          <?php get_template_part('/common/breadcrumbs/administrative-bread'); ?>
        <!-- breadcrumbs -->
        <div id="content">
            <section class="admin-section-page">
                <div class="container">
                        <h2> <?php echo pll__('الهيكل التنظيمي'); ?></h2>
                    <div class="tree-admin">
                        <div class="admin-boss">
                            <div class="box-admin">
                                <span><?php echo esc_html(INNER_PAGES['o_title_1']); ?></span>
                            </div>
                        </div>
                        <?php
                            $section_1 = INNER_PAGES['o_section_1'];
                           
                        ?>
                        <div class="admin-boss-sub">
                                <?php
                                    if ($section_1) {
                                        foreach ($section_1 as $group) {
                                            $elements = explode("\n", $group['col_elements']);
                                            echo '<div class="admin-vertical">';
                                            foreach ($elements as $element) {
                                                echo '<div class="box-admin"><span>' . esc_html(trim($element)) . '</span></div>';
                                            }
                                            echo '</div>';
                                        }
                                    }
                                ?>
                        </div>
                        
                        <div class="admin-boss mo">
                            <div class="box-admin">
                                <span> <?php echo esc_html(INNER_PAGES['o_title_2']); ?></span>
                            </div>
                        </div>
                        <?php
                            $section_2 = INNER_PAGES['o_section_2'];
                           
                        ?>
                        <div class="admin-boss-sub">
                            <?php
                                if ($section_2) {
                                    foreach ($section_2 as $group) {
                                        $elements = explode("\n", $group['col_elements_2']);
                                        echo '<div class="admin-vertical">';
                                        foreach ($elements as $element) {
                                            echo '<div class="box-admin"><span>' . esc_html(trim($element)) . '</span></div>';
                                        }
                                        echo '</div>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php include(FOOTER); ?>