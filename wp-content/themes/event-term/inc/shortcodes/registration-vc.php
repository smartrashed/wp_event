<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_event_term_registration extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'bg_image'          => '',
            'title'             => '',
            'sub_title'         => '',
            'reg_shortcode'     => '',
            'el_class'          => '',                            
        ), $atts));
        ob_start();
        event_term_registration($bg_image,$title,$sub_title,$reg_shortcode,$el_class);
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "event_term_registration",
    "name"                  => esc_html__("Event Registration", "event-term"),
    "class"                 => "",
    "category"              => esc_html__('Event Term', "event-term"),
    "params" => array(
        array(
            "type"          => "attach_image",
            "heading"       => esc_html__("Section Background Image:", "event-term"),
            "param_name"    => "bg_image",
            "description"       => esc_html__("Attach an image as background image of this section", "event-term"),
        ),
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
            "heading"       => esc_html__("Registration form shortcode:", "event-term"),
            "param_name"    => "reg_shortcode",            
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