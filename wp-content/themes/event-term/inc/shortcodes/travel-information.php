<?php 

function event_term_travel_information($title,$sub_title,$vanue,$bus_station,$rail_station,$airport,$hotel,$restaurent,$el_class) {?>
<!--  Start Travel Info -->
<section class="travel-info section-padding">
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

            <div class="travel-wrapper">
                <div class="col-md-6">
                    <div class="travel-details">
                        <div class="travel-detail-item">
                            <div class="t-icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="t-content">
                                <h4><?php esc_html_e('Vanue','event-term') ?></h4>
                                <?php if(!empty($vanue)): ?>
                                <span><?php echo esc_html($vanue) ?></span>
                                <?php endif; ?>
                            </div>
                        </div><!-- /.travel-detail-item -->

                        <div class="travel-detail-item">
                            <div class="t-icon">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                            </div>
                            <div class="t-content">
                                <h4><?php esc_html_e('Transports','event-term') ?></h4>
                                <ul>
                                    <?php if(!empty($bus_station)): ?>
                                    <li><span class="pull-left"><?php esc_html_e('Bus Station','event-term') ?></span> <span class="pull-right"><?php echo esc_html($bus_station) ?></span></li>
                                    <?php endif; ?>
                                    <?php if(!empty($rail_station)): ?>
                                    <li><span class="pull-left"><?php esc_html_e('Rail Station','event-term') ?></span> <span class="pull-right"><?php echo esc_html($rail_station) ?></span></li>
                                    <?php endif; ?>
                                    <?php if(!empty($airport)): ?>
                                    <li><span class="pull-left"><?php esc_html_e('Airport','event-term') ?></span> <span class="pull-right"><?php echo esc_html($airport) ?></span></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div><!-- /.travel-detail-item -->

                        <div class="travel-detail-item">
                            <div class="t-icon">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                            </div>
                            <div class="t-content">
                                <h4><?php esc_html_e('Hotel And Restaurant','event-term') ?></h4>
                                <ul>
                                    <?php if(!empty($hotel)): ?>
                                    <li><span class="pull-left"><?php esc_html_e('Hotel','event-term') ?></span> <span class="pull-right"><?php echo esc_html($hotel) ?></span></li>
                                    <?php endif; ?>
                                    <?php if(!empty($restaurent)): ?>
                                    <li><span class="pull-left"><?php esc_html_e('Restaurent','event-term') ?></span><span class="pull-right"><?php echo esc_html($restaurent) ?></span></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div><!-- /.travel-detail-item -->
                    </div><!-- /.travel-details -->
                </div>
                <div class="col-md-6">
                    <div class="t-map">
                        <div id="map" class="maptravel"></div>
                    </div>
                </div>
            </div></div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!--  End Travel Info -->
<?php }
