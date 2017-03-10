<?php 

function event_term_testimonial($bg_image,$title,$sub_title,$post_limit,$el_class) {
    $bg_image = wp_get_attachment_image_src($bg_image, "full"); 
    ?>
    <!-- start event speaker  -->
    <section class="testimonial testimonial-v1 section-padding <?php echo esc_attr($el_class); echo ' '; echo ((!empty($bg_image))) ? 'testimonial-v4' : ''; ?>" <?php if (!empty($bg_image)): ?>style="background-image: url('<?php echo esc_url($bg_image[0]) ?>')"<?php endif; ?>>        
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
            </div><!-- /.speak-wrapper -->
        </div><!-- /.row -->                
        <div class="testimonial-wrapper">
            <div class="testimonial-container-owl owl-carousel">
                <?php 
                $the_query = new WP_Query( array(
                    'post_type' => 'et_testimonial',                        
                    'posts_per_page' => $post_limit,
                ));                     
                ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                $et_testimonial_options = get_post_meta( get_the_ID(), '_et_custom_testimonial_options', true );
                @$et_client_designation = $et_testimonial_options['et_client_designation'];
                @$et_client_image = $et_testimonial_options['et_client_image'];
                ?>
                <div class="item">
                    <div class="testimonial-content">
                        <?php the_content() ?>
                        <div class="client">
                                <div class="client-pic">
                                        <img src="<?php echo esc_url($et_client_image); ?>" alt="<?php the_title() ?>">
                                </div>
                                <div class="client-info">
                                    <h4 class="name"><?php the_title() ?></h4>
                                    <p class="type"><?php echo esc_html($et_client_designation); ?></p>
                                </div>
                        </div>
                    </div>
                </div>		            
                <?php endwhile;
                wp_reset_postdata();?>
            </div>
        </div><!-- /.speak-wrapper -->
        <?php if (!empty($bg_image)): ?> 
        </div>    
        <?php endif; ?>
    </section>
    <!-- end event speaker  -->
<?php }
