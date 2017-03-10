<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_event_term_newsletter_contact extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'title1'                => '',                              
            'title2'                => '',                              
            'title3'                => '',                              
            'description1'          => '',                              
            'description2'          => '',                              
            'description3'          => '',                              
            'icon_fontawesome1'     => '',                              
            'icon_fontawesome2'     => '',                              
            'icon_fontawesome3'     => '',                              
            'el_class'              => '',                              
        ), $atts));
        ob_start();
        event_term_newsletter_contact($title1,$title2,$title3,$description1,$description2,$description3,$icon_fontawesome1,$icon_fontawesome2,$icon_fontawesome3,$el_class);
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "event_term_newsletter_contact",
    "name"                  => esc_html__("Newsletter with Contact Info", "event-term"),
    "class"                 => "",
    "category"              => esc_html__('Event Term', "event-term"),
    "params" => array(        
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Title:", "event-term"),
            "param_name"    => "title1",
            "group" => esc_html__("Info Box 1", "event-term"),
        ),
        array(
            "type"          => "textarea",
            "heading"       => esc_html__("Description:", "event-term"),
            "param_name"    => "description1",
            "description"   => esc_html__("Enter numeric value only ex.80, 70", "event-term"),
            "group" => esc_html__("Info Box 1", "event-term"),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Select Icon', "event-term"),
            'param_name' => 'icon_fontawesome1',
            'settings' => array(
              'emptyIcon' => false, // default true, display an "EMPTY" icon?
              'type' => 'fontawesome',
              'iconsPerPage' => 100, // default 100, how many icons per/page to display
            ),
            'description' => esc_html__( 'Select icon from library.', "event-term" ),
            "group" => esc_html__("Info Box 1", "event-term"),
        ),
        
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Title:", "event-term"),
            "param_name"    => "title2",
            "group" => esc_html__("Info Box 2", "event-term"),
        ),
        array(
            "type"          => "textarea",
            "heading"       => esc_html__("Description:", "event-term"),
            "param_name"    => "description2",
            "description"   => esc_html__("Enter numeric value only ex.80, 70", "event-term"),
            "group" => esc_html__("Info Box 2", "event-term"),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Select Icon', "event-term"),
            'param_name' => 'icon_fontawesome2',
            'settings' => array(
              'emptyIcon' => false, // default true, display an "EMPTY" icon?
              'type' => 'fontawesome',
              'iconsPerPage' => 100, // default 100, how many icons per/page to display
            ),
            'description' => esc_html__( 'Select icon from library.', "event-term" ),
            "group" => esc_html__("Info Box 2", "event-term"),
        ),
        
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Title:", "event-term"),
            "param_name"    => "title3",
            "group" => esc_html__("Info Box 3", "event-term"),
        ),
        array(
            "type"          => "textarea",
            "heading"       => esc_html__("Description:", "event-term"),
            "param_name"    => "description3",
            "description"   => esc_html__("Enter numeric value only ex.80, 70", "event-term"),
            "group" => esc_html__("Info Box 3", "event-term"),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Select Icon', "event-term"),
            'param_name' => 'icon_fontawesome3',
            'settings' => array(
              'emptyIcon' => false, // default true, display an "EMPTY" icon?
              'type' => 'fontawesome',
              'iconsPerPage' => 100, // default 100, how many icons per/page to display
            ),
            'description' => esc_html__( 'Select icon from library.', "event-term" ),
            "group" => esc_html__("Info Box 3", "event-term"),
        ),        
        array(
            "type"              => "textfield",
            "heading"           => esc_html__("Extra Class Name:", "event-term"),
            "param_name"        => "el_class",
            "group" => esc_html__("Class", "event-term"),
            "description"       => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "event-term"),
        ),
    )
) );
endif;