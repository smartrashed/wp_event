<?php

function event_term_sponsors($bg_image,$title,$sub_title,$sponsors_rows,$el_class) { 
    $bg_image = wp_get_attachment_image_src($bg_image, "full");
    ?>
    <!--  start sponsor section  -->
    <section class="sponsor sponsor-v1 section-padding <?php echo esc_attr($el_class); echo ' '; echo ((!empty($bg_image))) ? 'white-title' : ''; ?>" <?php if (!empty($bg_image)): ?>style="background-image: url('<?php echo esc_url($bg_image[0]) ?>')"<?php endif; ?>>
        <?php if (!empty($bg_image)): ?>
        <div class="overlay"></div>
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

                <div class="sponsor-wrapper">
                    <?php if (!empty($sponsors_rows)):
                    foreach ($sponsors_rows as $sponsors_row): 
                    $category_id_value = $sponsors_row['category_id'];
                    $logo_per_row = $sponsors_row['logo_per_row'];
                    if ($logo_per_row == '4'){
                        $row_class = 'gold';
                    } else if ($logo_per_row == '5'){
                        $row_class = 'silver';
                    } else {
                        $row_class = 'platinum';
                    }
                    
                    $the_query = new WP_Query( array(
                        'post_type' => 'et_sponsors',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'et_sponsors_category',
                                'field'    => 'term_id',
                                'terms'    => $category_id_value,
                            ),
                        ),                      
                        'posts_per_page' => $sponsors_row['logo_limit'],
                    ));                    
                    ?>
                    <div class="ccr-sponsor <?php echo esc_attr($row_class); ?>">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="ccr-sponsor-cata">
                                    <h2><?php echo esc_html($sponsors_row['row_title']); ?></h2>
                                    <p><?php echo esc_html($sponsors_row['row_sub_title']); ?></p>
                                    <div class="ccr-sponsor-cata-item">
                                        <p><?php echo esc_html($sponsors_row['price_title']); ?></p>
                                        <div class="sponsor-price"><span class="currency"><?php echo esc_html($sponsors_row['price_currency']); ?></span><span class="price"><?php echo esc_html($sponsors_row['price']); ?></span></div>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-9">
                            <div class="row">
                                <div class="ccr-sponsor-area">
                                    <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
                                    <div class="ccr-sponsor-item-outer">
                                        <div class="ccr-sponsor-item">
                                            <?php the_post_thumbnail('event-term-sponsors-logo') ?>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                    wp_reset_postdata();?>
                                </div><!-- /.ccr-sponsor-area -->
                            </div>
                        </div><!-- /.col-md-9 -->
                    </div>
                    <div class="clearfix"></div>
                    <?php endforeach; ?>
                    <?php endif; ?>                    
                </div><!-- /.sponsor-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!--  end sponsor section  -->    
<?php }
