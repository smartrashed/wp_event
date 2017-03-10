<?php
/**
 * Visual Composer Shortcode of Event Term Google Map
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_event_term_google_map extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'el_class'          => '',                              
        ), $atts));
        
        ob_start();
        event_term_google_map($el_class);
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "event_term_google_map",
    "name"                  => esc_html__("Event Term Google Map", "event-term"),
    "class"                 => "",
    "category"              => esc_html__('Event Term', "event-term"),
    "params" => array(         
        array(
            "type"              => "textfield",
            "heading"           => esc_html__("Extra Class Name:", "event-term"),
            "param_name"        => "el_class",
            "description"       => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "event-term"),
        ),
    )
) );
endif;