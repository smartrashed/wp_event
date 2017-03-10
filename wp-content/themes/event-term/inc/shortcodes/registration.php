<?php

function event_term_registration($bg_image,$title,$sub_title,$reg_shortcode,$el_class) {
    $bg_image = wp_get_attachment_image_src($bg_image, "full");
    ?>    
    <!--  Start register now -->
    <section class="register-now section-padding <?php echo esc_attr($el_class); echo ' '; echo ((!empty($bg_image))) ? 'register-now-v4' : ''; ?>" <?php if (!empty($bg_image)): ?>style="background-image: url('<?php echo esc_url($bg_image[0]) ?>')"<?php endif; ?>>
        <?php if (!empty($bg_image)): ?> 
        <div class="overlay">    
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="section-head">
                    <?php if (!empty($title)): ?>
                        <h2 class="header-title"><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($sub_title)): ?>
                        <p class="header-desc"><?php echo esc_html($sub_title); ?></p>
                    <?php endif; ?>
                </div>

                <div class="register-wrapper">
                    <?php
                    if (!empty($reg_shortcode)){
                        echo do_shortcode($reg_shortcode);
                    }
                    ?>
                </div><!-- /.register-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <?php if (!empty($bg_image)): ?> 
        </div>  
        <?php endif; ?>
    </section>
    <!--  End register now -->    
<?php }
