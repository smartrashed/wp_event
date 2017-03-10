<?php
/**
 * Visual Composer Shortcode of FAQ
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_event_term_faq extends WPBakeryShortCode {
    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'title'             => '',           
            'qa_row'            => '',
            'el_class'          => '',                              
        ), $atts));
        
    	$qa_row = (array) vc_param_group_parse_atts( $qa_row );
        ob_start();
        event_term_faq($title,$qa_row,$el_class);
        return ob_get_clean();	         
    }
}
vc_map( array(
    "base"                  => "event_term_faq",
    "name"                  => esc_html__("FAQ", "event-term"),
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
            "heading"    => esc_html__("Q&A Row:", "event-term"),
            "param_name" => "qa_row",
            "params" => array(                
                array(
                    "type"          => "textfield",
                    "heading"       => esc_html__("Question:", "event-term"),
                    "param_name"    => "question",                    
                ),                   
                array(
                    "type"          => "textarea",
                    "heading"       => esc_html__("Answer:", "event-term"),
                    "param_name"    => "answer",                    
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