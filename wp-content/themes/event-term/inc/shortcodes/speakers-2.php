<?php

function event_term_speakers_2($title,$sub_title,$post_limit,$el_class) {?>
    <!-- start event speaker  -->
    <section class="event-speaker homepage2 section-padding <?php echo esc_attr($el_class) ?>">
        <div class="container">
            <div class="row">
                <div class="section-head">
                    <?php if (!empty($title)): ?>
                        <h2 class="header-title"><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($sub_title)): ?>
                    <p class="header-desc"><?php echo esc_html($sub_title); ?></p>
                    <?php endif; ?>
                </div>
                <div class="speak-wrapper-h2">
                    <?php 
                    $the_query = new WP_Query( array(
                        'post_type' => 'et_speakers',                        
                        'posts_per_page' => $post_limit,
                    ));                     
                    ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                    $et_speakers_options = get_post_meta( get_the_ID(), '_et_custom_speakers_options', true );
                    $et_speakers_designation = $et_speakers_options['et_speakers_designation'];
                    $et_speakers_facebook = $et_speakers_options['et_speakers_facebook'];
                    $et_speakers_twitter = $et_speakers_options['et_speakers_twitter'];
                    $et_speakers_in = $et_speakers_options['et_speakers_in'];
                    $et_speakers_gplus = $et_speakers_options['et_speakers_gplus'];
                    $et_speakers_igram = $et_speakers_options['et_speakers_igram'];
                    ?>                    
                    <div class="col-sm-6 col-md-4">
                        <div class="speaker-item-h2">
                            <div class="speaker-pic">
                                <?php the_post_thumbnail('event-term-sponsors2') ?>
                            </div>
                            <div class="speaker-content-bg"></div>
                            <div class="speaker-content-h2-out-side">
                                <div class="speaker-content-h2">
                                    <div class="speaker-content-header-h2">
                                        <h3><a href="<?php the_permalink() ?>" class="speaker-name"><?php the_title(); ?></a></h3>                                        
                                        <?php if(!empty($et_speakers_designation)): ?>
                                        <p class="designation"><?php echo esc_html($et_speakers_designation) ?></p>
                                        <?php endif; ?>                                        
                                    </div>

                                    <div class="speaker-social-h2">
                                        <ul class="social-media">
                                            <li><a class="facebook" href="<?php echo (!empty($et_speakers_facebook)) ? $et_speakers_facebook : '#' ?>"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="<?php echo (!empty($et_speakers_twitter)) ? $et_speakers_twitter : '#' ?>"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="linkedin" href="<?php echo (!empty($et_speakers_in)) ? $et_speakers_in : '#' ?>"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a class="google" href="<?php echo (!empty($et_speakers_gplus)) ? $et_speakers_gplus : '#' ?>"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="behance" href="<?php echo (!empty($et_speakers_igram)) ? $et_speakers_igram : '#' ?>"><i class="fa fa-camera"></i></a></li>
                                        </ul>                                        
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.speaker-item -->
                    </div><!-- /.col-sm-4 col-md-4 -->
                    <?php endwhile;
                    wp_reset_postdata(); ?>                
                </div><!-- /.speak-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- end event speaker  -->    
<?php }
