<?php
$et_page_banner = '';
$et_event_date_counter = '';
$et_banner_title = '';
$et_event_sub_title = '';
$et_event_date = '';
$et_event_location = '';
$et_reg_btn = '';
$et_view_detail_btn = '';
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
endif;
?>
<section class="bannar bannar-v2">
    <div class="bannar-img">
        <?php if (!empty($et_page_banner)): ?>
        <img src="<?php echo esc_url($et_page_banner)?>" alt="<?php get_bloginfo(); ?>">
        <?php endif; ?>
        <div class="overlay"></div>
        <div class="bannar-conent-area">
            <div class="container">
                <div class="row">
                    <div class="slider-carousel-content">
                        <div class="header-countdown-wrapper">
                            <div class="header-countdown">
                                <div id="header-counter2" class="header-counter" data-days="days" data-hrs="hrs" data-min="min" data-sec="sec" data-label="time left" data-gmt="0"><?php echo esc_html($et_event_date_counter) ?></div>
                            </div>
                        </div>

                        <?php if (!empty($et_banner_title)): ?>
                        <h1><?php echo esc_html($et_banner_title) ?></h1>
                        <?php endif; ?>
                        <div class="meta-slider">
                            <?php if (!empty($et_event_date)): ?>
                            <span class="date"><i class="fa fa-calendar"></i> <?php echo esc_html($et_event_date) ?></span>
                            <?php endif; ?>
                            
                            <?php if (!empty($et_event_location)): ?>
                            <span class="location"><i class="fa fa-map-marker"></i><?php echo esc_html($et_event_location) ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="slider-btn">
                            <?php if(!empty($et_reg_btn)): ?>
                            <a href="<?php echo esc_url($et_reg_btn) ?>" class="custom-btn register-now hvr-bounce-to-bottom"><?php esc_html_e('Register Now', 'event-term') ?></a>
                            <?php endif; ?>
                            <?php if(!empty($et_view_detail_btn)): ?>
                            <a href="<?php echo esc_url($et_view_detail_btn) ?>" class="custom-btn view-detail hvr-bounce-to-bottom"><?php esc_html_e('View Details', 'event-term') ?></a>
                            <?php endif; ?>                            
                        </div>
                    </div><!-- /.slider-content -->	
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.banner conent area -->
    </div><!-- /.banner img -->
</section>

