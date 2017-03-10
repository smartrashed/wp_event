<?php 
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_event_term_travel_information extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'title'             => '',
            'sub_title'         => '',
            'vanue'             => '',
            'bus_station'       => '',
            'rail_station'      => '',
            'airport'           => '',
            'hotel'             => '',
            'restaurent'        => '',
            'el_class'          => '',                              
        ), $atts));            	
        ob_start();
        event_term_travel_information($title,$sub_title,$vanue,$bus_station,$rail_station,$airport,$hotel,$restaurent,$el_class);
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "event_term_travel_information",
    "name"                  => esc_html__("Travel Information", "event-term"),
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
            "heading"       => esc_html__("Vanue Address:", "event-term"),
            "param_name"    => "vanue",
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Bus Station Distance:", "event-term"),
            "param_name"    => "bus_station",
            "description"       => esc_html__("Enter nearby bus station distance from event location", "event-term"),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Rail Station Distance:", "event-term"),
            "param_name"    => "rail_station",
            "description"       => esc_html__("Enter nearby rail station distance from event location", "event-term"),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Airport Distance:", "event-term"),
            "param_name"    => "airport",
            "description"       => esc_html__("Enter nearby airport distance from event location", "event-term"),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Hotel Distance:", "event-term"),
            "param_name"    => "hotel",
            "description"       => esc_html__("Enter nearby hotel distance from event location", "event-term"),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Restaurent Distance:", "event-term"),
            "param_name"    => "restaurent",
            "description"       => esc_html__("Enter nearby restaurent distance from event location", "event-term"),
        ),
        array(
            "type"              => "textfield",
            "heading"           => esc_html__("Extra Class Name:", "event-term"),
            "param_name"        => "el_class",
            "group" => esc_html__("Extra Class", "event-term"),
            "description"       => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "event-term"),
        ),
    )
) );
endif;