<?php
$et_banner_title ='';
$et_banner_sub_title ='';
$et_event_special_fac ='';
$et_view_detail_btn ='';
$et_page_banner ='';
$et_reg_form_title ='';
$et_reg_form_sub_title ='';
$et_reg_form_shortcode ='';
$et_event_date_counter ='';
$et_custom_page_options ='';
if (function_exists('cs_get_option')):
    $et_event_date = cs_get_option('et_event_date');
    $et_event_location = cs_get_option('et_event_location');
    $et_event_date_counter = cs_get_option('et_event_date_counter');
    $et_reg_btn = cs_get_option('et_reg_btn');
    $et_view_detail_btn = cs_get_option('et_view_detail_btn');
    $et_custom_page_options = get_post_meta( get_the_ID(), '_et_custom_page_options', true );
    $et_page_banner = isset($et_custom_page_options['et_page_banner']) ? $et_custom_page_options['et_page_banner'] : '';
    $et_banner_title = isset($et_custom_page_options['et_banner_title']) ? $et_custom_page_options['et_banner_title'] : ''; 
    $et_banner_sub_title = isset($et_custom_page_options['et_banner_sub_title']) ? $et_custom_page_options['et_banner_sub_title'] : ''; 
    $et_event_special_fac = isset($et_custom_page_options['et_event_special_fac']) ? $et_custom_page_options['et_event_special_fac'] : ''; 
    $et_reg_form_title = isset($et_custom_page_options['et_reg_form_title']) ? $et_custom_page_options['et_reg_form_title'] : ''; 
    $et_reg_form_sub_title = isset($et_custom_page_options['et_reg_form_sub_title']) ? $et_custom_page_options['et_reg_form_sub_title'] : ''; 
    $et_reg_form_shortcode = isset($et_custom_page_options['et_reg_form_shortcode']) ? $et_custom_page_options['et_reg_form_shortcode'] : ''; 
endif;
?>
<section class="bannar bannar-v3" <?php if (!empty($et_page_banner)): echo 'style="background-image:url('.esc_url($et_page_banner).'); background-size:cover;"'; endif; ?>>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="bannar-content-v3">
                    <div class="header-countdown-wrapper">
                        <div class="countdown-text">
                            <div class="countdwon-text-item">
                                <p><?php esc_html_e('Days','event-term') ?></p>
                            </div>
                            <div class="countdwon-text-item">
                                <p><?php esc_html_e('Hours','event-term') ?></p>
                            </div>
                            <div class="countdwon-text-item">
                                <p><?php esc_html_e('Minutes','event-term') ?></p>
                            </div>
                            <div class="countdwon-text-item">
                                <p><?php esc_html_e('Seconds','event-term') ?></p>
                            </div>
                        </div>
                        <div class="header-countdown">
                            <div id="header-counter3" data-days="days" data-hrs="hrs" data-min="min" data-sec="sec" data-label="time left" data-gmt="0"><?php echo esc_html($et_event_date_counter) ?></div>
                        </div>
                    </div>                    
                    <?php if (!empty($et_banner_title)): ?>
                    <h2><?php echo esc_html($et_banner_title) ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($et_banner_sub_title)): ?>
                    <p><?php echo wp_kses_post($et_banner_sub_title) ?></p>
                    <?php endif; ?>
                    <ul>
                        <?php 
                        if(!empty($et_event_special_fac)):
                        foreach ($et_event_special_fac as $special_fac):
                            echo '<li>'.esc_html($special_fac['et_facility']).'</li>';
                        endforeach;
                        endif;
                        ?>
                    </ul>
                    <?php if(!empty($et_view_detail_btn)): ?>
                    <a href="<?php echo esc_url($et_view_detail_btn) ?>" class="custom-btn"><?php esc_html_e('Read More', 'event-term') ?></a>
                    <?php endif; ?>  
                </div>
            </div><!-- /.col-md-7 -->
            <div class="col-md-5">
                <?php if(!empty($et_reg_form_title) || !empty($et_reg_form_sub_title) || !empty($et_reg_form_shortcode)): ?>
                <div class="register-now-outer">
                    <div class="register-now">
                        <div class="section-head">
                            <?php if(!empty($et_reg_form_title)): ?>
                            <h2 class="header-title"><?php echo esc_html($et_reg_form_title) ?></h2>
                            <?php endif; ?>
                            <?php if(!empty($et_reg_form_sub_title)): ?>
                            <p class="header-desc"><?php echo esc_html($et_reg_form_sub_title) ?></p>
                            <?php endif; ?>
                        </div>
                        
                        <div class="register-wrapper">
                            <?php if(!empty($et_reg_form_shortcode)):
                                echo do_shortcode($et_reg_form_shortcode);
                            endif; ?>
                        </div><!-- /.register-wrapper -->                        
                    </div>
                </div>
                <?php endif; ?>
            </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
