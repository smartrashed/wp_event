<?php
$et_page_banner = '';
$et_banner_title ='';
$et_banner_sub_title ='';
$et_reg_btn = '';
$et_view_detail_btn = '';
$et_event_date_counter = '';
$et_custom_page_options = '';
if (function_exists('cs_get_option')):
    $et_event_name = cs_get_option('et_event_name');
    $et_event_sub_title = cs_get_option('et_event_sub_title');
    $et_event_special_fac = cs_get_option('et_event_special_fac');
    $et_event_date = cs_get_option('et_event_date');
    $et_event_location = cs_get_option('et_event_location');
    $et_event_date_counter = cs_get_option('et_event_date_counter');
    $et_reg_btn = cs_get_option('et_reg_btn');
    $et_view_detail_btn = cs_get_option('et_view_detail_btn');
    $et_custom_page_options = get_post_meta( get_the_ID(), '_et_custom_page_options', true );
    $et_page_banner = isset($et_custom_page_options['et_page_banner']) ? $et_custom_page_options['et_page_banner'] : '';
    $et_banner_title = isset($et_custom_page_options['et_banner_title']) ? $et_custom_page_options['et_banner_title'] : ''; 
    $et_banner_sub_title = isset($et_custom_page_options['et_banner_sub_title']) ? $et_custom_page_options['et_banner_sub_title'] : '';
endif;
?>
<section class="bannar bannar-v4">
    <div class="bannar-img">
        <?php if (!empty($et_page_banner)): ?>
        <img src="<?php echo esc_url($et_page_banner)?>" alt="<?php get_bloginfo(); ?>">
        <?php endif; ?>
        <div class="overlay"></div>
        <div class="bannar-conent-area">
            <div class="bannar-header">
                <?php if (!empty($et_banner_sub_title)): ?>
                <h2><?php echo wp_kses_post($et_banner_sub_title) ?></h2>
                <?php endif; ?>                
                <?php if (!empty($et_banner_title)): ?>
                <h1><?php echo esc_html($et_banner_title) ?></h1>
                <?php endif; ?>
                <?php if(!empty($et_reg_btn)): ?>
                <a href="<?php echo esc_url($et_reg_btn) ?>" class="bannar-link left hvr-bounce-to-bottom"><?php esc_html_e('Register Now', 'event-term') ?></a>
                <?php endif; ?>
                <?php if(!empty($et_view_detail_btn)): ?>
                <a href="<?php echo esc_url($et_view_detail_btn) ?>" class="bannar-link right hvr-bounce-to-bottom"><?php esc_html_e('View Details', 'event-term') ?></a>
                <?php endif; ?>                
            </div><!-- end bannar header  -->
        </div><!-- /.banner conent area -->
    </div><!-- /.banner img -->
    <div class="countdown-timer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-countdown-wrapper">
                        <div class="countdown-text">
                            <div class="countdwon-text-item">
                                <p><?php esc_html_e('Days', 'event-term') ?></p>
                            </div>
                            <div class="countdwon-text-item">
                                <p><?php esc_html_e('Hours', 'event-term') ?></p>
                            </div>
                            <div class="countdwon-text-item">
                                <p><?php esc_html_e('Minutes', 'event-term') ?></p>
                            </div>
                            <div class="countdwon-text-item">
                                <p><?php esc_html_e('Seconds', 'event-term') ?></p>
                            </div>
                        </div>
                        <div class="header-countdown">
                            <div id="header-counter4" class="header-counter" data-days="days" data-hrs="hrs" data-min="min" data-sec="sec" data-label="time left" data-gmt="0"><?php echo esc_html($et_event_date_counter) ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php if(!empty($et_reg_btn)): ?>
                    <a href="<?php echo esc_url($et_reg_btn) ?>" class="join-event"><?php esc_html_e('Join The Event', 'event-term') ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div><!-- /.countdown-timer -->
</section>

