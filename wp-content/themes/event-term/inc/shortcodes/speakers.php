<?php

function event_term_speakers($title,$sub_title,$post_limit,$el_class) { ?>
    <!-- start event speaker  -->
    <section class="event-performer-2col section-padding <?php echo esc_attr($el_class) ?>">
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
                <div class="performer-wrapper row">
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
                    <div class="performer-item">
                        <div class="performer-item-inner">
                            <div class="performer-image">
                                <?php the_post_thumbnail() ?>
                            </div>
                            <div class="performer-item-content">
                                <a href="<?php the_permalink() ?>" class="speaker-name"><h3><?php the_title(); ?></h3></a>
                                <p class="designation"><?php echo esc_html($et_speakers_designation) ?></p>
                                <ul class="social-media">
                                    <li><a class="facebook" href="<?php echo (!empty($et_speakers_facebook)) ? $et_speakers_facebook : '#' ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="<?php echo (!empty($et_speakers_twitter)) ? $et_speakers_twitter : '#' ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="linkedin" href="<?php echo (!empty($et_speakers_in)) ? $et_speakers_in : '#' ?>"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="google" href="<?php echo (!empty($et_speakers_gplus)) ? $et_speakers_gplus : '#' ?>"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="behance" href="<?php echo (!empty($et_speakers_igram)) ? $et_speakers_igram : '#' ?>"><i class="fa fa-camera"></i></a></li>
                                </ul> 
                            </div><!-- /.performer-item-content -->
                        </div>
                    </div>                                            
                    <?php endwhile;
                    wp_reset_postdata();?>                    
                </div><!-- /.speak-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- end event speaker  -->   
<?php }
