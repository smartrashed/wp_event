<?php

function event_term_recent_news_1($bg_image,$title,$sub_title,$post_limit,$el_class) {
    $bg_image = wp_get_attachment_image_src($bg_image, "full");?>        
    <!--  start recent blog section   -->
    <section class="recent-blog recent-blog-v1 <?php echo (!empty($bg_image)) ? 'recent-blog-v4' : 'section-padding' ?><?php echo esc_attr($el_class) ?>" <?php if (!empty($bg_image)): ?>style="background-image: url('<?php echo esc_url($bg_image[0]) ?>')"<?php endif; ?>>
        <?php if (!empty($bg_image)): ?> 
        <div class="overlay">   
        <?php endif; ?>        
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

                <div class="recent-blog-wrapper">
                    <?php 
                    $the_query = new WP_Query( array(
                        'post_type' => 'post',                        
                        'posts_per_page' => $post_limit,
                        'ignore_sticky_posts' => true,
                    ));
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>                    
                    <div class="col-md-4">
                        <div class="post-item">                            
                            <div class="post-thumb">
                                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('event-term-recent-news') ?></a>                                                             <div class="overlay"></div>
                                <div class="overlay-content">
                                    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                                    <div class="meta-post">
                                        <span class="date"><i class="fa fa-calendar"></i><?php echo get_the_date(); ?></span>                                        
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.post-item -->
                    </div><!-- /.col-md-4 -->
                    <?php endwhile;
                    wp_reset_postdata(); ?>                    
                </div><!-- /.recent-blog-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <?php if (!empty($bg_image)): ?> 
        </div>    
        <?php endif; ?>
    </section>
    <!--  end recent blog section   -->    
<?php }
