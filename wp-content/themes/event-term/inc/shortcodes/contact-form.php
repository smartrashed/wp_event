<?php

function event_term_contact_form($bg_image,$title,$sub_title,$cf_shortcode,$el_class) {
    $bg_image = wp_get_attachment_image_src($bg_image, "full"); 
    ?> 
    <!--  start Comments section   -->
    <section class="leave-comments <?php echo esc_attr($el_class) ?>" <?php if (!empty($bg_image)): ?>style="background-image: url('<?php echo esc_url($bg_image[0]) ?>')"<?php endif; ?>>
        <div class="overlay">
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

                    <div class="leave-comment-area">
                        <?php echo do_shortcode($cf_shortcode) ?>
                    </div><!-- /.leave-comment-area -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </section>
    <!--  end Comments section   -->   
<?php }
