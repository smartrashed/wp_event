<?php 
$et_page_banner = '';
$et_banner_title = '';
$et_event_date = '';
$et_event_location = '';
$et_event_date_counter = '';
$et_reg_btn = '';
$et_view_detail_btn = '';
$et_custom_page_options = '';
if (function_exists('cs_get_option')):
    $et_event_name = cs_get_option('et_event_name');    
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
<section class="bannar bannar-v1">
    <div class="bannar-img">
        <?php if (!empty($et_page_banner)): ?>
        <img src="<?php echo esc_url($et_page_banner)?>" alt="<?php get_bloginfo(); ?>">
        <?php endif; ?>
        <div class="overlay"></div>
        <div class="bannar-conent-area">
            <div class="bannar-header">
                <div class="container">
                    <?php if (!empty($et_banner_title)): ?>
                    <h1><?php echo esc_html($et_banner_title) ?></h1>
                    <?php endif; ?>
                    <ul class="meta-post">
                        <?php if (!empty($et_event_date)): ?>
                        <li>
                            <i class="fa fa-calendar"></i>
                            <?php echo esc_html($et_event_date) ?>
                        </li>
                        <?php endif; ?>
                        <?php if (!empty($et_event_location)): ?>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <?php echo esc_html($et_event_location) ?>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div><!-- /.container -->
            </div><!-- end bannar header  -->

            <div class="bannar-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-8">

                            <div class="header-countdown-wrapper">
                                <div class="header-countdown">
                                    <div id="header-counter1" class="header-counter" data-days="days" data-hrs="hrs" data-min="min" data-sec="sec" data-label="time left" data-gmt="0"><?php echo esc_html($et_event_date_counter) ?></div>
                                </div>
                            </div>
                        </div><!-- /.col-md-8 -->

                        <div class="col-sm-6 col-md-4">
                            <div class="bannar-btn">
                                <?php if(!empty($et_reg_btn)): ?>
                                <a href="<?php echo esc_url($et_reg_btn) ?>" class="register-now hvr-bounce-to-bottom"><?php esc_html_e('Register Now', 'event-term') ?></a>
                                <?php endif; ?>
                                <?php if(!empty($et_view_detail_btn)): ?>
                                <a href="<?php echo esc_url($et_view_detail_btn) ?>" class="view-detail hvr-bounce-to-bottom"><?php esc_html_e('View Details', 'event-term') ?></a>
                                <?php endif; ?>
                            </div>
                        </div><!-- /.col-md-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.bannar-content -->
        </div><!-- /.banner conent area -->
    </div><!-- /.banner img -->
</section>

