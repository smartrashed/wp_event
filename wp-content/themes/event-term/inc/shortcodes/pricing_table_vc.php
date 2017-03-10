<?php
/**
 * Visual Composer Shortcode of BLOCK-03- ON 1 COLUMN
 */

if (function_exists('vc_map')) :
class WPBakeryShortCode_pricing_table extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(           
            'bg_image'       => '',                                                             
            'title'          => '',                                                             
            'description'    => '',                                                            
            'limit'          => '',                                                            
            'order'          => '',                                                            
            'orderby'        => '',                                                            
            'el_class'       => '',                                                             
        ), $atts));
        ob_start();
        event_term_pricing_table($bg_image,$title,$description,$limit,$order,$orderby,$el_class);
        return ob_get_clean();	         
    }
}

vc_map(
    array(
        "base"      => "pricing_table",
        "name"      => esc_html__("Pricing Table", 'event-term'),
        "category"  => esc_html__("Event Term", 'event-term'),
        "params"    => array(
            array(
                "type"          => "attach_image",
                "heading"       => esc_html__("Section Background Image:", "event-term"),
                "param_name"    => "bg_image",
                "description"       => esc_html__("Attach an image as background image of this section", "event-term"),
            ),            
            array(
                "type"          => "textfield",
                "heading"       => esc_html__("Title:", 'event-term'),
                "param_name"    => "title",
                "description"   => esc_html__("Enter text which will be used as title of this block. Leave blank if no title is needed.", 'event-term'),
            ),             
            array(
                "type"          => "textarea",
                "heading"       => esc_html__("Description:", 'event-term'),
                "param_name"    => "description",
                "description"   => esc_html__("Enter text which will be used as description of this block. Leave blank if no description is needed.", 'event-term'),
            ),
            array(
                "type"          => "textfield",
                "heading"       => esc_html__("Limit:", 'event-term'),
                "param_name"    => "limit",
                "description"   => esc_html__("Write down the number of table you want to display", 'event-term'),
            ),
            array(
                "type"          => "dropdown",
                "heading"       => esc_html__( "Order", 'event-term' ),
                "param_name"    => "order",                
                "value"		=> array(
                    esc_html__( "Select order",'event-term')	=> "",
                    esc_html__( "DESC",'event-term')	=> "DESC",
                    esc_html__( "ASC", 'event-term' )	=> "ASC",
                ),
            ),
            array(
                "type"          => "dropdown",
                "heading"       => esc_html__( "Order By", 'event-term' ),
                "param_name"    => "orderby",
                "description"   => esc_html__( 'Select how to sort retrieved posts. More at %s.', 'event-term' ), 
                "value"		=> array(
                    esc_html__( "Select order by",'event-term')	=> "",
                    esc_html__( "Date", 'event-term' )		=> "date",
                    esc_html__( "Name", 'event-term' )		=> "name",
                    esc_html__( "Modified", 'event-term' )	=> "modified",
                    esc_html__( "Author", 'event-term' )	=> "author",
                    esc_html__( "Random", 'event-term' )	=> "rand",
                    esc_html__( "Comment Count", 'event-term' )=> "comment_count",
                ),
            ),
            array(
                "type"              => "textfield",
                "heading"           => esc_html__("Extra class name:", 'event-term'),
                "param_name"        => "el_class",
                "description"       => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'event-term'),
            ),
        )
    )
);
endif;