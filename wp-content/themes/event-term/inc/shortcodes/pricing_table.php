<?php
/**
* Display Posts row with small thumbs
*
* @param $cat_id =  int if has cat id
* @param $limit = int if limit number of posts
*/
function event_term_pricing_table($bg_image,$title,$description,$limit,$order,$orderby,$el_class) {
    //$unqID = uniqid();
    $post_query_args = array(
        'post_type'             => 'et_pricing_table',
        'post_status'           => 'publish',
        'posts_per_page'        => $limit,
        'order'                 => $order,
        'orderby'               => $orderby,
    );
    $the_post_query = new WP_Query( $post_query_args );
    $bg_image = wp_get_attachment_image_src($bg_image, "full");
?>      
    <!-- start pricing table -->
    <div class="pricing-table section-padding <?php echo esc_attr($el_class); echo ' '; echo ((!empty($bg_image))) ? 'pricing-table-v2 pricing-table-v4' : 'pricing-table-v1'; ?>" <?php if (!empty($bg_image)): ?>style="background-image: url('<?php echo esc_url($bg_image[0]) ?>')"<?php endif; ?>>
        <?php if (!empty($bg_image)): ?> 
        <div class="overlay"></div>    
        <?php endif; ?>        
        <div class="container">
            <div class="row">
                <div class="section-head">
                    <?php if (!empty($title)): ?>
                    <h2 class="header-title"><span><?php echo esc_html($title); ?></span></h2>
                    <?php endif; ?>
                    <?php if (!empty($description)): ?>
                    <p class="header-desc"><?php echo wp_kses_post($description); ?></p>
                    <?php endif; ?>
                </div>

                <div class="<?php echo ((!empty($bg_image))) ? 'pricing-table-wrapper-v2' : 'pricing-table-wrapper'; ?>">
                    <?php
                    if ( $the_post_query->have_posts() ) :
                        while ( $the_post_query->have_posts() ) : $the_post_query->the_post();
                        $option_meta_data = get_post_meta( get_the_ID(), '_et_custom_pricing_table_options', true );
                        $pricing_rate = $option_meta_data['pricing_rate'];
                        $offers = $option_meta_data['offers'];
                        $offer_btn_txt = $option_meta_data['offer_btn_txt'];
                        $offer_btn_link = $option_meta_data['offer_btn_link'];
                    ?>
                    <div class="col-sm-12 col-md-4 pricing-table">
                        <?php if (empty($bg_image)): ?> 
                        <div class="price-item-outer">  
                        <?php endif; ?>                            
                            <div class="<?php echo (!empty($bg_image)) ? 'price-item-v2' : 'price-item price-item-v1-1'; ?>">
                                <div class="price">
                                    <p><span><?php echo esc_html($pricing_rate) ?></span></p>
                                    <div class="booking-cat"><span><?php the_title() ?></span></div>
                                </div>
                                <?php if (!empty($offer_btn_txt)): ?>
                                <ul class="price-detail">
                                    <?php foreach ($offers as $offer): ?>
                                    <li>
                                        <span class="price-list">
                                        <span class="price-list-icon"><i class="<?php echo esc_attr($offer['et_offer_icon']); ?>"></i></span><?php echo esc_html($offer['offer_title']); ?>
                                        </span>
                                        </li>
                                    <?php endforeach; ?>                                       
                                </ul>
                                <?php endif; ?>
                                <?php if (!empty($offer_btn_txt)): ?>
                                <div class="pricing-table-btn">
                                    <a href="<?php echo esc_url($offer_btn_link); ?>" class="custon-btn price-btn hvr-bounce-to-bottom"><?php echo esc_html($offer_btn_txt); ?></a>
                                </div>
                                <?php endif; ?>
                            </div><!-- /.price-item -->
                        <?php if (empty($bg_image)): ?> 
                        </div>  
                        <?php endif; ?>
                    </div><!-- /.col-sm-4 col-md-4 --> 
                    <?php endwhile;
                    wp_reset_postdata();                    
                    else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'event-term'); ?></p>
                    <?php endif; ?> 
                </div><!-- /.pricing-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.pricing-table -->    
<?php }