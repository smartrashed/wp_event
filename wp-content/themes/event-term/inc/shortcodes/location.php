<?php

function event_term_location($title,$location_infos,$el_class) {?>
        <!--  start map section   -->
    <section class="map-v1">
        <div id="map" class="location-map"></div>        
        <div class="get-in-touch">
            <?php if (!empty($title)): ?>
                <h3><?php echo esc_html($title); ?></h3>
            <?php endif; ?>
            <?php if (!empty($location_infos)): ?>
            <ul>
                <?php foreach ($location_infos as $location_info): ?>
                <li class="contact-item">
                    <i class="<?php echo esc_attr($location_info['icon_fontawesome']); ?>"></i>
                    <div class="content">
                        <h4 class="ccr-name"><?php echo esc_html($location_info['title']); ?></h4>
                        <p class="ccr-detail"><?php echo esc_html($location_info['description']); ?></p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </section>
    <!--  end map section   -->
<?php }
