<?php

function event_term_become_sponsors($title,$sub_title,$req_from,$el_class) {?>         
    <!--  start become-sponsor  -->
    <section class="become-sponsor-v1 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="become-sponsor-item">
                        <?php if (!empty($title)): ?>
                            <h2><?php echo esc_html($title); ?></h2>
                        <?php endif; ?>
                        <?php if (!empty($sub_title)): ?>
                            <p><?php echo esc_html($sub_title); ?></p>
                        <?php endif; ?>                            
                    </div>
                </div><!-- /.col-md-10 -->
                <?php if (!empty($req_from)): ?>
                <div class="col-md-3">
                    <a href="<?php echo esc_url($req_from); ?>" class="custom-btn hvr-bounce-to-bottom"><?php _e('Request Now','event-term') ?></a>
                </div><!-- /.col-md-2 -->
                <?php endif; ?> 
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!--  end become-sponsor  -->    
    
<?php }
