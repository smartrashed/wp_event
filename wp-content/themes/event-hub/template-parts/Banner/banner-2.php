<?php
$eh_page_banner = '';
$eh_event_date_counter = '';
$eh_banner_title = '';
$eh_event_sub_title = '';
$eh_event_date = '';
$eh_event_location = '';
$eh_reg_btn = '';
$eh_view_detail_btn = '';
$eh_custom_page_options = '';
if (function_exists('cs_get_option')):
    $eh_event_name = cs_get_option('eh_event_name');
    $eh_event_sub_title = cs_get_option('eh_event_sub_title');
    $eh_event_special_fac = cs_get_option('eh_event_special_fac');
    $eh_event_date = cs_get_option('eh_event_date');
    $eh_event_location = cs_get_option('eh_event_location');
    $eh_event_date_counter = cs_get_option('eh_event_date_counter');
    $eh_reg_btn = cs_get_option('eh_reg_btn');
    $eh_view_detail_btn = cs_get_option('eh_view_detail_btn');
    $eh_custom_page_options = get_post_meta( get_the_ID(), '_eh_custom_page_options', true );
    $eh_page_banner = isset($eh_custom_page_options['eh_page_banner']) ? $eh_custom_page_options['eh_page_banner'] : '';
    $eh_banner_title = isset($eh_custom_page_options['eh_banner_title']) ? $eh_custom_page_options['eh_banner_title'] : ''; 
endif;
?>
<section class="bannar bannar-v2">
    <div class="bannar-img">
        <?php if (!empty($eh_page_banner)): ?>
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

                        <?php if (!empty($eh_banner_title)): ?>
                        <h1><?php echo esc_html($eh_banner_title) ?></h1>
                        <?php endif; ?>
                        <div class="meta-slider">
                            <?php if (!empty($eh_event_date)): ?>
                            <span class="date"><i class="fa fa-calendar"></i> <?php echo esc_html($eh_event_date) ?></span>
                            <?php endif; ?>
                            
                            <?php if (!empty($eh_event_location)): ?>
                            <span class="location"><i class="fa fa-map-marker"></i><?php echo esc_html($eh_event_location) ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="slider-btn">
                            <?php if(!empty($eh_reg_btn)): ?>
                            <a href="<?php echo esc_url($et_reg_btn) ?>" class="custom-btn register-now hvr-bounce-to-bottom"><?php esc_html_e('Register Now', 'event-term') ?></a>
                            <?php endif; ?>
                            <?php if(!empty($eh_view_detail_btn)): ?>
                            <a href="<?php echo esc_url($et_view_detail_btn) ?>" class="custom-btn view-detail hvr-bounce-to-bottom"><?php esc_html_e('View Details', 'event-term') ?></a>
                            <?php endif; ?>                            
                        </div>
                    </div><!-- /.slider-content -->	
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.banner conent area -->
    </div><!-- /.banner img -->
</section>

