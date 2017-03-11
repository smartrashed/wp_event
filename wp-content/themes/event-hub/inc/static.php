<?php 
/**
 * Enqueue all theme scripts and styles
 *
 * @package EventHub
 * @author CodexCoder
 */

/**
 * Enqueue scripts and styles.
 */
function event_hub_scripts() {
    /*$gmap_api = 'AIzaSyBP3wA0iYoevRqn8LmJglqYXhi_r7Xt33Y';
    if (function_exists('cs_get_option')):
        $gmap_api = cs_get_option('et_google_api');
    endif;    */
    wp_enqueue_style('event-hub-stylesheet', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', EVENTHUB_ASSETS . '/css/bootstrap.min.css', false);
    wp_enqueue_style('font-awesome', EVENTHUB_ASSETS . '/css/font-awesome.min.css', false);
    wp_enqueue_style('owl-carousel', EVENTHUB_ASSETS . '/css/owl.carousel.css', false);
    wp_enqueue_style('hover-min', EVENTHUB_ASSETS . '/css/hover-min.css', false);
    wp_enqueue_style('event-hub-style', EVENTHUB_ASSETS . '/css/style.css', false);
    wp_enqueue_style('event-hub-responsive', EVENTHUB_ASSETS . '/css/responsive.css', false);      



    //wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key='.$gmap_api, null, null, true);
    wp_enqueue_script('event-hub-plugins', EVENTHUB_ASSETS . '/js/plugins.js', array('jquery'), false, true);
    wp_enqueue_script('event-hub-functions', EVENTHUB_ASSETS . '/js/functions.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('mediaelement');
    if (is_singular() && comments_open() && get_option('thread_comments')){
        wp_enqueue_script('comment-reply');
    }
}
add_action( 'wp_enqueue_scripts', 'event_hub_scripts', 90);

if ( ! function_exists( 'event_hub_fonts_url' ) ):
    function event_hub_fonts_url(){
        $et_font = cs_get_option('et_font_family');    
        $et_font_family = $et_font['family'];

        $et_title_font = cs_get_option('et_title_font_family');           
        $et_title_font_family = $et_title_font['family'];

        $et_menu_font = cs_get_option('et_menu_font_family');           
        $et_menu_font_family = $et_menu_font['family'];

        $font_url = '';

        /*
        Translators: If there are characters in your language that are not supported
        by chosen font(s), translate this to 'off'. Do not translate into your own language.
         */
        if ('off' !== _x('on', 'Google font: on or off', 'event-hub')){
            $font_families = array();
            if (!empty($et_font_family)){
            $font_families[] = $et_font_family;        
            } 
            if(!empty($et_title_font_family) && ($et_title_font_family != $et_font_family)){
                $font_families[] = $et_title_font_family;
            } 
            if(!empty($et_menu_font_family) && ($et_menu_font_family != $et_font_family) && ($et_menu_font_family != $et_title_font_family)){
                $font_families[] = $et_menu_font_family;
            } 
            if (empty($et_font_family) && empty($et_title_font_family) && empty($et_menu_font_family)){
                $font_families[] = 'Roboto';
            }
            $query_args = implode('|', $font_families);
            $font_url = add_query_arg('family', urlencode(''.$query_args.':400,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext'), "//fonts.googleapis.com/css");
        }
        return $font_url;
    }
endif;

if ( ! function_exists( 'event_hub_custom_styles' ) ):
function event_hub_custom_styles() {
    $et_font = cs_get_option('et_font_family');   
    $et_font_family = $et_font['family'];   
    $et_font_size = cs_get_option('et_font_size');    
    $et_title_font = cs_get_option('et_title_font_family');    
    $et_title_font_family = $et_title_font['family'];    
    $et_menu_font = cs_get_option('et_menu_font_family');    
    $et_menu_font_family = $et_menu_font['family'];    
    $et_menu_transform = cs_get_option('et_menu_transform');       
    wp_enqueue_style(
        'custom-style',get_template_directory_uri() . '/assets/css/custom-style.css'
    );
    $custom_css = "
        body {
            font-family: {$et_font_family}, sans-serif;
            font-size: {$et_font_size}px;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: {$et_title_font_family},sans-serif;
        }
        .menu-area .navbar-nav li a {
            font-family: {$et_menu_font_family}, sans-serif;
            text-transform: {$et_menu_transform};
        }";
    wp_add_inline_style( 'custom-style', $custom_css );
}
endif;

if ( ! function_exists( 'event_hub_enqueue_gmap' ) ):
    function event_hub_enqueue_gmap() {
        $et_map_title = cs_get_option('et_map_title');   
        $et_map_zoom = cs_get_option('et_map_zoom');      
        $et_map_latitude = cs_get_option('et_map_latitude');    
        $et_map_longitude = cs_get_option('et_map_longitude');
        $map_icon = get_template_directory_uri() .'/assets/images/mapicon.png';

        wp_add_inline_script('jquery-migrate', 'jQuery(document).ready(function(){
            google.maps.event.addDomListener(window, "load", event_hub_locationmap);
            var map;
            function event_hub_locationmap() {
                var mapOptions = {
                    zoom: '.esc_attr($et_map_zoom).',
                    zoomControl : true,
                    zoomControlOptions: {
                      position: google.maps.ControlPosition.TOP_LEFT
                    },                    
                    scrollwheel: false,
                    center: new google.maps.LatLng('.esc_attr($et_map_latitude).', '.esc_attr($et_map_longitude).'),

                    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
                };
                var mapElement = document.getElementById("map");
                var map = new google.maps.Map(mapElement, mapOptions);

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng('.esc_attr($et_map_latitude).', '.esc_attr($et_map_longitude).'),
                    map: map,
                    title: "'.esc_attr($et_map_title).'",
                    icon: "'.esc_attr($map_icon).'",
                    size: new google.maps.Size(20, 32),
                    origin: new google.maps.Point(0,0),
                    anchor: new google.maps.Point(0,32)
                });
            }
        });');
    }
endif;

if (function_exists('cs_get_option')):
    wp_enqueue_style('event-hub-fonts', event_hub_fonts_url());
    add_action( 'wp_enqueue_scripts', 'event_hub_custom_styles', 90 );
    add_action( 'wp_enqueue_scripts', 'event_hub_enqueue_gmap',90 );
endif;
