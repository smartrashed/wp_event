<?php

function event_term_newsletter_contact($title1,$title2,$title3,$description1,$description2,$description3,$icon_fontawesome1,$icon_fontawesome2,$icon_fontawesome3,$el_class) {?> 
    <!--  start contact section   -->
    <section class="contact-section newsletter-contact <?php echo esc_attr($el_class) ?>">
        <div class="col-md-6">
            <div class="row">
                <div class="contact-section-inner">
                    <div class="col-sm-4 col-md-4">
                        <div class="row">
                            <div class="contact-item-outer">
                                <div class="contact-item">
                                    <span><i class="<?php echo esc_attr($icon_fontawesome1); ?>"></i></span>
                                    <div class="content">
                                        <h4 class="ccr-name"><?php echo esc_html($title1); ?></h4>
                                        <p class="ccr-detail"><?php echo esc_html($description1); ?></p>
                                    </div>
                                </div>
                            </div><!-- /.contact-item-outer -->
                        </div><!-- /.row -->
                    </div><!-- /.col-sm-4 col-md-4 -->
                    <div class="col-sm-4 col-md-4">
                        <div class="row">
                            <div class="contact-item-outer">
                                <div class="contact-item">
                                    <span><i class="<?php echo esc_attr($icon_fontawesome2); ?>"></i></span>
                                    <div class="content">
                                        <h4 class="ccr-name"><?php echo esc_html($title2); ?></h4>
                                        <p class="ccr-detail"><?php echo esc_html($description2); ?></p>
                                    </div>
                                </div>
                            </div><!-- /.contact-item-outer -->
                        </div><!-- /.row -->
                    </div><!-- /.col-sm-4 col-md-4 -->
                    <div class="col-sm-4 col-md-4">
                        <div class="row">
                            <div class="contact-item-outer">
                                <div class="contact-item">
                                    <span><i class="<?php echo esc_attr($icon_fontawesome3); ?>"></i></span>
                                    <div class="content">
                                        <h4 class="ccr-name"><?php echo esc_html($title3); ?></h4>
                                        <p class="ccr-detail"><?php echo esc_html($description3); ?></p>
                                    </div>
                                </div>
                            </div><!-- /.contact-item-outer -->
                        </div><!-- /.row -->
                    </div><!-- /.col-sm-4 col-md-4 -->
                </div><!-- /.contact-section-inner -->
            </div><!-- /.row -->
        </div><!-- /.col-md-6 -->

        <div class="col-md-6 mailpoet-section">
            <div class="row">
                <?php dynamic_sidebar('newsletter-widgets'); ?>
            </div><!-- /.row -->
        </div><!-- /.col-md-6 -->
    </section>
    <!--  end contact section   -->    
<?php }
