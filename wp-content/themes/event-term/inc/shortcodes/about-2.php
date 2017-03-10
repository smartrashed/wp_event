<?php

function event_term_about_2($bg_image,$title,$sub_title,$about_image,$content,$buy_ticket_btn,$buy_ticket,$readmore_btn,$readmore,$event_infos,$el_class) {
    $bg_image = wp_get_attachment_image_src($bg_image, "full"); 
    $about_image = wp_get_attachment_image_src($about_image, "full"); 
    ?>
<section class="national-conference section-padding <?php echo esc_attr($el_class); echo ' '; echo ((!empty($bg_image))) ? 'conference-v4' : 'v2'; ?>" <?php if (!empty($bg_image)): ?>style="background-image: url('<?php echo esc_url($bg_image[0]) ?>')"<?php endif; ?>>
        
        <?php echo ((!empty($bg_image))) ? '<div class="overlay"></div>' : '' ?>
        <div class="container">
            <div class="row">
                <div class="nc-top">
                    <div class="col-md-6">
                        <div class="nc-image">
                            <img class="img-responsive" src="<?php echo esc_url($about_image[0]); ?>" alt="image">
                        </div><!-- /.nc-image -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="conference-main">
                            <div class="section-head">
                                <?php if (!empty($title)): ?>
                                    <h2 class="header-title"><?php echo esc_html($title); ?></h2>
                                <?php endif; ?>
                                <?php if (!empty($sub_title)): ?>
                                <p class="header-desc"><?php echo esc_html($sub_title); ?></p>
                                <?php endif; ?>
                            </div>

                            <?php if (!empty($content)): ?>
                            <p><?php echo wp_kses_post($content) ?></p>
                            <?php endif; ?>
                            <div class="button-group">
                                <?php if (!empty($buy_ticket_btn)): ?>
                                <a href="<?php echo esc_url($buy_ticket); ?>" class="custom-btn buy-ticket hvr-bounce-to-bottom"><?php echo esc_html($buy_ticket_btn) ?></a>
                                <?php endif; ?>
                                <?php if (!empty($readmore_btn)): ?>
                                <a href="<?php echo esc_url($readmore); ?>" class="custom-btn read-more hvr-bounce-to-bottom"><?php echo esc_html($readmore_btn) ?></a>
                                <?php endif; ?>
                            </div>
                        </div><!-- /.conference-main -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.nc-top -->
                <?php if (!empty($event_infos)): ?>
                <div class="nc-bottom">
                    <?php foreach ($event_infos as $event_info): ?>
                    <div class="col-md-4 nc-col">
                        <div class="nc-info">
                            <div class="nc-info-inner">
                                <div class="icon">
                                    <div class="icon-inner">
                                        <i class="<?php echo esc_attr($event_info['icon_fontawesome']); ?>" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <h3><?php echo esc_html($event_info['title']); ?></h3>
                                <p class="date"><?php echo wp_kses_post($event_info['description']); ?></p>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <?php endforeach; ?>
                </div><!-- /.nc-bottom -->
                <?php endif; ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
<?php }
