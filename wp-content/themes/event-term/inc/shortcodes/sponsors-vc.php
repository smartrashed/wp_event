<?php
/**
 * Visual Composer Shortcode of Sponsors
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_event_term_sponsors extends WPBakeryShortCode {
    
    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'bg_image'          => '',
            'title'             => '',
            'sub_title'         => '',            
            'sponsors_row'      => '',
            'el_class'          => '',                              
        ), $atts));
        
    	$sponsors_row = (array) vc_param_group_parse_atts( $sponsors_row );
        ob_start();
        event_term_sponsors($bg_image,$title,$sub_title,$sponsors_row,$el_class);
        return ob_get_clean();	         
    }
}
function event_term_sponsors_taxonomy (){
    //$categories_array = array();
    
    $categories = get_terms(  array('taxonomy' => 'et_sponsors_category','hide_empty' => 0) );
    //$categories = get_categories();
    foreach( $categories as $category ){
      $categories_array[$category->term_id] = $category->name;
    }  
    return $categories_array;
}
function event_term_load_terms($taxonomy){
  global $wpdb;
  $query = 'SELECT DISTINCT 
                  t.name,t.term_id,t.slug 
              FROM
                wp_terms t 
              INNER JOIN 
                wp_term_taxonomy tax 
              ON 
                tax.term_id = t.term_id
              WHERE 
                  ( tax.taxonomy = \'' . $taxonomy . '\')';                     
  $result =  $wpdb->get_results($query , ARRAY_A);
  return $result;                 
}
$terms = event_term_load_terms('et_sponsors_category');
$categories_array = array( esc_html__( 'All Categories', 'event-term' ) => 'sp-all-cat' );
foreach( $terms as $term ){
  $categories_array[$term['name']] = $term['term_id'];
}
vc_map( array(
    "base"                  => "event_term_sponsors",
    "name"                  => esc_html__("Sponsors", "event-term"),
    "class"                 => "",
    "category"              => esc_html__('Event Term', "event-term"),
    "params" => array(
        array(
            "type"          => "attach_image",
            "heading"       => esc_html__("Section Background Image:", "event-term"),
            "param_name"    => "bg_image",
            "group" => esc_html__("Sponsors", "event-term"),
            "description"       => esc_html__("Attach an image as background image of this section", "event-term"),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Title:", "event-term"),
            "param_name"    => "title",
            "group" => esc_html__("Sponsors", "event-term"),
        ),                        
        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Sub Title:", "event-term"),
            "param_name"    => "sub_title",
            "group" => esc_html__("Sponsors", "event-term"),
        ),                        
        array(
            "type" => "param_group",
            "heading"    => esc_html__("Sponsors Row:", "event-term"),
            "param_name" => "sponsors_row",
            "group" => esc_html__("Sponsors Row", "event-term"),
            "params" => array(                
                array(
                    "type"          => "textfield",
                    "heading"       => esc_html__("Row Title:", "event-term"),
                    "param_name"    => "row_title",                    
                ),                   
                array(
                    "type"          => "textfield",
                    "heading"       => esc_html__("Row Sub Title:", "event-term"),
                    "param_name"    => "row_sub_title",                    
                ),                   
                array(
                    "type"          => "textfield",
                    "heading"       => esc_html__("Price Box Title:", "event-term"),
                    "param_name"    => "price_title",                    
                ),                   
                array(
                    "type"          => "textfield",
                    "heading"       => esc_html__("Price Currency:", "event-term"),
                    "param_name"    => "price_currency",                    
                ),                   
                array(
                    "type"          => "textfield",
                    "heading"       => esc_html__("Amount of Price:", "event-term"),
                    "param_name"    => "price",                    
                ),         
                array(
                    'param_name'    => 'category_id',
                    'type'          => 'dropdown',
                    'value'         => $categories_array,
                    'heading'       => esc_html__('Category filter:', 'event-term'),
                ),
                array(
                    'param_name'    => 'logo_per_row',
                    'type'          => 'dropdown',
                    'value'         => array(
                        esc_html__('Three', 'event-term') => '3',
                        esc_html__('Four', 'event-term') => '4',
                        esc_html__('Five', 'event-term') => '5',
                    ),
                    "std"         => '',
                    'heading'       => esc_html__('Logo Per Row:', 'event-term'),
                ),
                array(
                    "type"          => "textfield",
                    "heading"       => esc_html__("Logo Limit:", "event-term"),
                    "param_name"    => "logo_limit",
                    "default"       =>'3'
                ),
            ),
        ),
        array(
            "type"              => "textfield",
            "heading"           => esc_html__("Extra Class Name:", "event-term"),
            "param_name"        => "el_class",
            "group" => esc_html__("Sponsors", "event-term"),
            "description"       => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "event-term"),
        ),
    )
) );
endif;