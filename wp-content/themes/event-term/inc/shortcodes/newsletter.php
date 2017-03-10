<?php

function event_term_newsletter($el_class) {?>    
    <!--  start contact section   -->
    <section class="contact-section mailpoet-section single-contact-section color-bg contact-section-v1 <?php echo esc_attr($el_class) ?>">
        <div class="col-md-12">
            <div class="row">
                <?php dynamic_sidebar('newsletter-widgets'); ?>
            </div><!-- /.row -->
        </div><!-- /.col-md-12 -->
    </section>
    <!--  end contact section   -->    
<?php }
