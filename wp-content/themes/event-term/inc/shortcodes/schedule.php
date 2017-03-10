<?php

function event_term_schedule($bg_image,$title,$sub_title,$el_class) {
    $bg_image = wp_get_attachment_image_src($bg_image, "full"); 
    ?>
    <section class="event-schedule event-schedule-v1 section-padding <?php echo esc_attr($el_class); ?>" <?php if (!empty($bg_image)): ?>style="background-image: url('<?php echo esc_url($bg_image[0]) ?>')"<?php endif; ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-head">
                        <?php if (!empty($title)): ?>
                        <h2 class="header-title"><?php echo esc_html($title); ?></h2>
                        <?php endif; ?>
                        <?php if (!empty($sub_title)): ?>
                        <p class="header-desc"><?php echo esc_html($sub_title); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php 
                    $et_date_schedules = '';
                    if (function_exists('cs_get_option')):
                    ?>
                    <div class="event-schedule-inner">
                        <div class="event-schedule-inner-fixed">

                            <!-- Nav tabs -->
                            <ul id="myTab" class="nav-tab" role="tablist">
                                <?php                            
                                $et_date_schedules = cs_get_option('et_date_schedules');                            
                                if (!empty($et_date_schedules)):
                                    $schedule_id = 1;
                                    $schedule_area_id = 1;
                                    foreach ($et_date_schedules as $et_date_schedule):                            
        ?>
                                <li role="presentation" class="<?php echo ($schedule_id == '1') ? 'active' : '' ?>"><a href="#<?php echo 'schedule_id'.$schedule_id++ ?>" aria-controls="<?php echo 'schedule_id'.$schedule_area_id++ ?>" role="tab" data-toggle="tab">
                                        <strong><?php echo esc_html($et_date_schedule['event_date']) ?></strong>
                                        <span class="date"><?php echo esc_html($et_date_schedule['event_day']) ?><br><?php echo esc_html($et_date_schedule['event_month_year']) ?></span>
                                    </a></li>

                                <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <?php 
                                if (!empty($et_date_schedules)):
                                    $schedule_id = 1;
                                    $i = 1;
                                    foreach ($et_date_schedules as $et_date_schedule):                            
                                ?>
                                <div role="tabpanel" class="tab-pane fade in <?php echo ($schedule_id == 1) ? 'active' : '' ?>" id="<?php echo 'schedule_id'.$schedule_id++ ?>">
                                    <div class="schedule-wrapper">
                                        <div class="schedule-item header">
                                            <div class="col-xs-2 col-sm-2 col-md-2">
                                                <div class="item-inner">
                                                    <span><i class="fa fa-calendar"></i></span>
                                                    <span><?php _e('Time','event-term') ?></span>
                                                </div>
                                            </div><!-- /.col-xs-2 col-sm-2 col-md-2 -->
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="item-inner">
                                                    <span><i class="fa fa-list-alt"></i></span>
                                                    <span><?php _e('Session','event-term') ?></span>
                                                </div>
                                            </div><!-- /.col-xs-4 col-sm-4 col-md-4 -->
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="item-inner">
                                                    <span><i class="fa fa-microphone"></i></span>
                                                    <span><?php _e('Speakers','event-term') ?></span>
                                                </div>
                                            </div><!-- /.col-md-3 -->
                                            <div class="col-xs-2 col-sm-2 col-md-2">
                                                <div class="item-inner">
                                                    <span><i class="fa fa-map-marker"></i></span>
                                                    <span><?php _e('Venue','event-term') ?></span>
                                                </div>
                                            </div><!-- /.col-md-3 -->
                                        </div><!-- /.schedule-item -->
                                        <?php 
                                        $et_date_schedules = cs_get_option('schedule_per_date_'.$i++);
                                        foreach ($et_date_schedules as $et_date_schedule):
                                        ?>
                                        <div class="schedule-item">
                                            <div class="col-xs-2 col-sm-2 col-md-2">
                                                <div class="item-inner event-time">
                                                    <span><?php echo esc_html($et_date_schedule['event_time']) ?></span>
                                                </div>
                                            </div><!-- /.col-xs-2 col-sm-2 col-md-2 -->
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="item-inner event-session">
                                                    <span><?php echo esc_html($et_date_schedule['event_session']) ?></span>
                                                </div>
                                            </div><!-- /.col-xs-4 col-sm-4 col-md-4 -->
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="item-inner event-schedule-speaker">
                                                    <?php
                                                    $args = array(
                                                        'post__in' => $et_date_schedule['event_speakers'],
                                                        'post_type' => 'et_speakers');
                                                    $the_query = new WP_Query($args);
                                                    if ( $the_query->have_posts() ) :
                                                        while ( $the_query->have_posts() ) : $the_query->the_post();?>
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php if ( has_post_thumbnail() ) : ?>
                                                                <?php the_post_thumbnail('event-term-speakers-small'); ?>
                                                            <?php endif; ?>
                                                        <?php the_title() ?></a>
                                                        <?php endwhile;
                                                    endif;
                                                    ?>                                                
                                                </div>
                                            </div><!-- /.col-md-3 -->
                                            <div class="col-xs-2 col-sm-2 col-md-2">
                                                <div class="item-inner vanue">
                                                    <span><?php echo esc_html($et_date_schedule['event_venue']) ?></span>
                                                </div>
                                            </div><!-- /.col-md-3 -->
                                        </div><!-- /.schedule-item -->
                                        <?php endforeach; ?>
                                    </div><!-- /.schedule-wrapper -->
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>                                                
                            </div>
                        </div><!-- /.event-schedule-inner-fixed -->
                    </div><!-- /.event-schedule-inner -->
                    <?php endif; ?>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>  
<?php }
