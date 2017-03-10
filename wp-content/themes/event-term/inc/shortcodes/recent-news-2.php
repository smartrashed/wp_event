<?php

function event_term_recent_news_2($bg_image,$title,$sub_title,$post_limit,$el_class) {?>        
    <!--  start recent blog section   -->
    <section class="recent-blog section-padding <?php echo esc_attr($el_class) ?>">
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
                        <div <?php post_class('post-item') ?>>
                            <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumb">
                                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('event-term-related-post') ?></a>                    </div>
                            <?php endif; ?>
                            <div class="content-outer">
                                <div class="content">
                                    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                                    <div class="meta-post">
                                        <span class="date"><i class="fa fa-calendar"></i><?php echo get_the_date(); ?></span>                                        
                                    </div>
                                    <div class="excerpt">
                                        <?php
                                            $trimexcerpt = get_the_excerpt();
                                            $shortexcerpt = wp_trim_words( $trimexcerpt, 12 );
                                            echo $shortexcerpt;
                                        ?>
                                    </div>
                                    <a href="<?php the_permalink() ?>" class="custom-btn hvr-bounce-to-bottom"><?php _e('Read More', 'event-term') ?></a>
                                </div>
                            </div><!-- /.post-item -->
                        </div>
                    </div><!-- /.col-md-4 -->
                    <?php endwhile;
                    wp_reset_postdata(); ?>                    
                </div><!-- /.recent-blog-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!--  end recent blog section   -->    
<?php }
