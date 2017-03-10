<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_event_term_location extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'title'             => '',
            'location_info'     => '',
            'el_class'          => '',                              
        ), $atts));
        
    	$location_info = (array) vc_param_group_parse_atts( $location_info );
        ob_start();
        event_term_location($title,$location_info,$el_class);
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "event_term_location",
    "name"                  => esc_html__("Location", "event-term"),
    "class"                 => "",
    "category"              => esc_html__('Event Term', "event-term"),
    "params" => array(
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Title:", "event-term"),
            "param_name"    => "title",
        ),        
        array(
            "type" => "param_group",
            "heading"    => esc_html__("Location Info:", "event-term"),
            "param_name" => "location_info",
            "params" => array(
                array(
                    "type"          => "textfield",
                    "heading"       => esc_html__("Title:", "event-term"),
                    "param_name"    => "title",
                ),
                array(
                    "type"          => "textarea",
                    "heading"       => esc_html__("Description:", "event-term"),
                    "param_name"    => "description",
                    "description"   => esc_html__("Enter numeric value only ex.80, 70", "event-term"),
                ),
                array(
                    'type' => 'iconpicker',
                    'heading' => esc_html__( 'Select Icon', "event-term"),
                    'param_name' => 'icon_fontawesome',
                    'settings' => array(
                      'emptyIcon' => false, // default true, display an "EMPTY" icon?
                      'type' => 'fontawesome',
                      'iconsPerPage' => 100, // default 100, how many icons per/page to display
                    ),
                    'description' => esc_html__( 'Select icon from library.', "event-term" ),
                ),                    
            ),
        ),
        array(
            "type"              => "textfield",
            "heading"           => esc_html__("Extra Class Name:", "event-term"),
            "param_name"        => "el_class",
            "description"       => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "event-term"),
        ),
    )
) );
endif;