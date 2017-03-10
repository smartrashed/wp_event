<?php

function event_term_contact_us($title1,$title2,$title3,$description1,$description2,$description3,$icon_fontawesome1,$icon_fontawesome2,$icon_fontawesome3,$cf_title,$cf_shortcode,$el_class) {?> 
    <!--  start contact section   -->
    <section class="contact-us section-padding <?php echo esc_attr($el_class) ?>">
        <div class="container">                           
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-item-inner">
                        <span><i class="<?php echo esc_attr($icon_fontawesome1); ?>"></i></span>
                        <div class="content">
                            <h4 class="ccr-name"><?php echo esc_html($title1); ?></h4>
                            <a href="#" class="ccr-detail"><?php echo esc_html($description1); ?></a>
                        </div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-inner">
                        <span><i class="<?php echo esc_attr($icon_fontawesome2); ?>"></i></span>
                        <div class="content">
                            <h4 class="ccr-name"><?php echo esc_html($title2); ?></h4>
                            <a href="#" class="ccr-detail"><?php echo esc_html($description2); ?></a>
                        </div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-inner">
                        <span><i class="<?php echo esc_attr($icon_fontawesome3); ?>"></i></span>
                        <div class="content">
                            <h4 class="ccr-name"><?php echo esc_html($title3); ?></h4>
                            <p class="ccr-detail"><?php echo esc_html($description3); ?></p>
                        </div>
                    </div>
                </div>
            </div><!-- /.contact-info -->
            <div class="massage-response-area">
                <?php if (!empty($cf_title)): ?>
                <h3><?php echo esc_html($cf_title); ?></h3>
                <?php endif; ?>

                <?php echo do_shortcode($cf_shortcode) ?>
            </div><!-- /.massage-response-area --> 
        </div>
    </section>
    <!--  end contact section   -->    
<?php }
