<?php

function event_term_about_1($title,$sub_title,$content,$buy_ticket_btn,$buy_ticket,$readmore_btn,$readmore,$event_infos,$el_class) {?>
<section class="national-conference conference-v1 section-padding <?php echo esc_attr($el_class) ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
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
                </div><!-- /.col-md-8 -->
                <?php if (!empty($event_infos)): ?>
                <div class="col-md-4">
                    <div class="conference-info-outer">
                        <div class="conference-info">
                            <ul class="info-list">
                                <?php foreach ($event_infos as $event_info): ?>
                                    <li>
                                        <span class="c-info-icon"><i class="<?php echo esc_attr($event_info['icon_fontawesome']); ?>"></i></span>
                                        <span class="c-info-content">
                                            <strong><span><?php echo esc_html($event_info['title']); ?></span></strong>
                                            <span class="i-text"><?php echo esc_html($event_info['description']); ?></span>
                                        </span>
                                    </li>                                    
                                <?php endforeach; ?>
                            </ul>
                        </div><!-- /.conference-info -->
                    </div><!-- /.conference-info-outer -->
                </div><!-- /.col-md-4 -->
                <?php endif; ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
<?php }
