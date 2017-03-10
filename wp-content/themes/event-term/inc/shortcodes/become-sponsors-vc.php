<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_event_term_become_sponsors extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'title'             => '',
            'sub_title'         => '',
            'req_from'          => '',
            'el_class'          => '',                            
        ), $atts));
        ob_start();
        event_term_become_sponsors($title,$sub_title,$req_from,$el_class);
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "event_term_become_sponsors",
    "name"                  => esc_html__("Become Sponsors", "event-term"),
    "class"                 => "",
    "category"              => esc_html__('Event Term', "event-term"),
    "params" => array(
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Title:", "event-term"),
            "param_name"    => "title",            
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Sub Title:", "event-term"),
            "param_name"    => "sub_title",            
        ),        
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Request Form Link:", "event-term"),
            "param_name"    => "req_from",            
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