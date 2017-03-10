<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_event_term_about_2 extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'bg_image'             => '',
            'title'             => '',
            'sub_title'         => '',
            'about_image'       => '',
            'buy_ticket_btn'    => '',
            'buy_ticket'        => '',
            'readmore_btn'      => '',
            'readmore'          => '',
            'event_info'        => '',
            'el_class'          => '',                              
        ), $atts));
        
    	$event_info = (array) vc_param_group_parse_atts( $event_info );
        $atts['content'] = $content;
        ob_start();
        event_term_about_2($bg_image,$title,$sub_title,$about_image,$content,$buy_ticket_btn,$buy_ticket,$readmore_btn,$readmore,$event_info,$el_class);
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "event_term_about_2",
    "name"                  => esc_html__("About Style 2", "event-term"),
    "class"                 => "",
    "category"              => esc_html__('Event Term', "event-term"),
    "params" => array(
        array(
            "type"          => "attach_image",
            "heading"       => esc_html__("Section Background Image:", "event-term"),
            "param_name"    => "bg_image",
            "group" => esc_html__("About", "event-term"),
            "description"       => esc_html__("Attach an image as background image of this section", "event-term"),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Title:", "event-term"),
            "param_name"    => "title",
            "group" => esc_html__("About", "event-term"),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Sub Title:", "event-term"),
            "param_name"    => "sub_title",
            "group" => esc_html__("About", "event-term"),            
        ),
        array(
            "type"          => "attach_image",
            "heading"       => esc_html__("Select Image:", "event-term"),
            "param_name"    => "about_image",
            "group" => esc_html__("About", "event-term"),
            "description"       => esc_html__("Attach an image to display on left side of this section", "event-term"),
        ),
        array(
            "type"          => "textarea_html",
            "heading"       => esc_html__("Description:", "event-term"),
            "param_name"    => "content",
            "group" => esc_html__("About", "event-term"),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Buy Ticket Button Text:", "event-term"),
            "param_name"    => "buy_ticket_btn",
            "group" => esc_html__("About", "event-term"),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Buy Ticket URL:", "event-term"),
            "param_name"    => "buy_ticket",
            "group" => esc_html__("About", "event-term"),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Read More Button Text:", "event-term"),
            "param_name"    => "readmore_btn",
            "group" => esc_html__("About", "event-term"),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Read More URL:", "event-term"),
            "param_name"    => "readmore",
            "group" => esc_html__("About", "event-term"),
        ),
        array(
            "type" => "param_group",
            "heading"    => esc_html__("Event Info:", "event-term"),
            "param_name" => "event_info",
            "group" => esc_html__("Event Info", "event-term"),
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
            "group" => esc_html__("Extra Class", "event-term"),
            "description"       => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "event-term"),
        ),
    )
) );
endif;