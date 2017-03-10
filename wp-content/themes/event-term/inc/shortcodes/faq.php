<?php

function event_term_faq($title,$qa_rows,$el_class) { ?>
    <section class="faq-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- second faq wrapper  -->
                    <div class="faq-wrapper second-faq-wrapper">
                        <?php if (!empty($title)): ?>
                        <h2><?php echo esc_html($title); ?></h2>
                        <?php endif; ?>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php 
                        if (!empty($qa_rows)):
                            $i = 1;
                            $j = 1;
                            $k = 1;
                            $l = 1;
                            foreach ($qa_rows as $qa_row): 
                        ?>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTen">
                                    <div class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i++ ?>" aria-expanded="true" aria-controls="collapse<?php echo $j++ ?>">
                                            <span><?php echo esc_html($qa_row['question']); ?></span>
                                        </a>
                                    </div>
                                </div>

                                <div id="collapse<?php echo $k++ ?>" class="panel-collapse collapse <?php echo ($l == 1)?'in':''; $l++ ?>" role="tabpanel" aria-labelledby="headingOne">

                                    <div class="panel-body">
                                        <p><?php echo wp_kses_post($qa_row['answer']); ?></p>                                    
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php endif; ?>                         
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>    
<?php }
