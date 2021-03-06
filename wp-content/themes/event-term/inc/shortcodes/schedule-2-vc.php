<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_event_term_schedule2 extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'bg_image'             => '',
            'title'             => '',
            'sub_title'         => '',
            'el_class'          => '',                              
        ), $atts));
        ob_start();
        event_term_schedule2($bg_image,$title,$sub_title,$el_class);
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "event_term_schedule2",
    "name"                  => esc_html__("Event Schedule 2 (Tab on Left)", "event-term"),
    "class"                 => "",
    "category"              => esc_html__('Event Term', "event-term"),
    "params" => array(
        array(
            "type"          => "attach_image",
            "heading"       => esc_html__("Section Background Image:", "event-term"),
            "param_name"    => "bg_image",
            "group" => esc_html__("Event Schedule", "event-term"),
            "description"       => esc_html__("Attach an image as background image of this section", "event-term"),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Title:", "event-term"),
            "param_name"    => "title",
            "group" => esc_html__("Event Schedule", "event-term"),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Sub Title:", "event-term"),
            "param_name"    => "sub_title",
            "group" => esc_html__("Event Schedule", "event-term"),
        ),        
        array(
            "type"              => "textfield",
            "heading"           => esc_html__("Extra Class Name:", "event-term"),
            "param_name"        => "el_class",
            "group" => esc_html__("Event Schedule", "event-term"),
            "description"       => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "event-term"),
        ),
    )
) );
endif;