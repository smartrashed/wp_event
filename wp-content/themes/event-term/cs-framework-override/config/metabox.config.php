<?php
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_et_custom_page_options',
  'title'     => esc_html__('Custom Page Options', 'event-term'),
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    // begin: a section
    array(
        'name'  => 'page_header',
        'icon'  => 'fa fa-eye',
        'fields' => array(
            array(
                'id'    => 'et_custom_page_settings',
                'type'  => 'switcher',
                'title' => 'Custom Page Settings',
                'label' => 'if you want custom settings for this page please switch "on" to this button',
                'default' => false
            ),
            array(
                'id'         => 'et_header_style',
                'type'       => 'radio',
                'title'      => esc_html__('Header Style', 'event-term'),
                'class'      => 'horizontal',
                'options'    => array(
                    '1'    => esc_html__('Header 1', 'event-term'),
                    '2'    => esc_html__('Header 2', 'event-term'),
                    '3'    => esc_html__('Header 3', 'event-term'),                    
                ),
                'default'    => '1',
                'dependency' => array( 'et_custom_page_settings', '==', 'true' ),                
            ),
            array(
                'id'    => 'et_transparent_menu',
                'type'  => 'switcher',
                'title' => 'Transparent Menu',
                'label' => 'If you want to make header 1 menu transparent please switch "on" to this button',
                'default' => false,
                'dependency' => array('et_custom_page_settings|et_header_style_1', '==|==', 'true|true'),
            ),            
            array(
                'id'    => 'et_is_page_header',
                'type'  => 'switcher',
                'title' => esc_html__('Page Header', 'event-term'),
                'label' => esc_html__('If you want to disable page header for this page switch "off" to this button', 'event-term'),
                'default' => true,
                'dependency' => array( 'et_custom_page_settings', '==', 'true' ),
            ),
            array(
                'id'    => 'et_page_header_bg',
                'type'  => 'upload',
                'title' => esc_html__('Page Header Background', 'event-term'),
                'dependency' => array( 'et_custom_page_settings|et_is_page_header', '==|==', 'true|true' ),
            ),
            array(
                'type'    => 'subheading',
                'content'   => esc_html__('Banner', 'event-term'),
            ),
            array(
                'id'    => 'et_is_banner',
                'type'  => 'switcher',
                'title' => esc_html__('Page banner with event counter', 'event-term'),
                'label' => esc_html__('If you want to display a banner for this page switch "on" to this button', 'event-term'),
                'default' => false
            ),
            array(
                'id'         => 'et_banner_style',
                'type'       => 'radio',
                'title'      => esc_html__('Banner Style', 'event-term'),
                'class'      => 'horizontal',
                'options'    => array(
                    '1'    => esc_html__('Banner 1', 'event-term'),
                    '2'    => esc_html__('Banner 2', 'event-term'),
                    '3'    => esc_html__('Banner 3', 'event-term'),
                    '4'    => esc_html__('Banner 4', 'event-term'),
                ),
                'default'    => '1',
                'dependency' => array( 'et_is_banner', '==', 'true' ),
            ),
            array(
                'id'    => 'et_page_banner',
                'type'  => 'upload',
                'title' => esc_html__('Banner', 'event-term'),
                'dependency' => array( 'et_is_banner', '==', 'true' ),
            ),
            array(
                'id'      => 'et_banner_title',
                'type'    => 'text',
                'title'   => esc_html__('Banner Title', 'event-term'),
                'dependency' => array( 'et_is_banner', '==', 'true' ),
            ),
            array(
                'id'      => 'et_banner_sub_title',
                'type'    => 'textarea',
                'title'   => esc_html__('Banner sub title (banner 3 & 4)', 'event-term'),
                'dependency' => array( 'et_is_banner', '==', 'true' ),
            ),
            array(
                'id'      => 'et_event_special_fac',
                'type'    => 'group',
                'button_title'    => 'Add New',
                'title'   => esc_html__('Event special facilities (banner 3)', 'event-term'),
                'accordion_title' => esc_html__('New Facility', 'event-term'),
                'fields'          => array(
                    array(
                        'id'          => 'et_facility',
                        'type'        => 'text',
                        'title'       => esc_html__('Facility', 'event-term'),
                    ),
                ),
                'dependency' => array( 'et_is_banner|et_banner_style_3', '==|==', 'true|true' ),
            ),
            array(
                'id'    => 'et_reg_form_title',
                'type'  => 'text',
                'title' => esc_html__('Registration form title (Banner 3)', 'event-term'),
                'dependency' => array( 'et_is_banner|et_banner_style_3', '==|==', 'true|true' ),
            ),
            array(
                'id'    => 'et_reg_form_sub_title',
                'type'  => 'textarea',
                'title' => esc_html__('Registration form sub title (Banner 3)', 'event-term'),
                'dependency' => array( 'et_is_banner|et_banner_style_3', '==|==', 'true|true' ),
            ),
            array(
                'id'    => 'et_reg_form_shortcode',
                'type'  => 'textarea',
                'title' => esc_html__('Registration form Shortcode (Banner 3)', 'event-term'),
                'dependency' => array( 'et_is_banner|et_banner_style_3', '==|==', 'true|true' ),
            ),
        ),
    ),
    // end: a section
    
  ),
);

// -----------------------------------------
// Testimonial Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_et_custom_testimonial_options',
  'title'     => esc_html__('Custom Post Options', 'event-term'),  
  'post_type' => 'et_testimonial',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    // begin: a section
    array(
      'name'  => 'client',
      'icon'  => 'fa fa-eye',
      'fields' => array(
        array(
            'id'          => 'et_client_designation',
            'type'        => 'text',
            'title'       => esc_html__('Client Designation', 'event-term'), 
        ),
        array(
          'id'      => 'et_client_image',
          'type'    => 'upload',
          'title'   => esc_html__('Client Image (recommended size 150*150)', 'event-term'),          
        ),          

      ),
    ),
    // end: a section
    
  ),
);

// -----------------------------------------
// Team Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_et_custom_speakers_options',
  'title'     => esc_html__('Team Member Info', 'event-term'),
  'post_type' => 'et_speakers',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(    
    // begin: a section
    array(
      'name'  => 'speakers_contact_info',
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(

        array(
          'id'    => 'et_speakers_designation',
          'type'  => 'text',
          'title' => esc_html__('Designation', 'event-term'),
        ),
        array(
          'id'    => 'et_speakers_facebook',
          'type'  => 'text',
          'title' => esc_html__('Facebook', 'event-term'),
        ),
        array(
          'id'    => 'et_speakers_twitter',
          'type'  => 'text',
          'title' => esc_html__('Twitter', 'event-term'),
        ),
        array(
          'id'    => 'et_speakers_in',
          'type'  => 'text',
          'title' => esc_html__('Linked In', 'event-term'),
        ),
        array(
          'id'    => 'et_speakers_gplus',
          'type'  => 'text',
          'title' => esc_html__('Google Plus', 'event-term'),
        ),
        array(
          'id'    => 'et_speakers_igram',
          'type'  => 'text',
          'title' => esc_html__('Instagram', 'event-term'),
        ),
      ), // end: fields
    ), // end: a section
    

  ),
);

// -----------------------------------------
// Pricing Table Metabox Options           -
// -----------------------------------------
$options[]    = array(
  'id'        => '_et_custom_pricing_table_options',
  'title'     => esc_html__('Package Options', 'event-term'),
  'post_type' => 'et_pricing_table',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    // begin: a section
    array(
      'name'  => 'client',
      'icon'  => 'fa fa-eye',
      'fields' => array(
        array(
            'id'          => 'pricing_rate',
            'type'        => 'text',
            'title'       => esc_html__('Package Rate', 'event-term'),
        ),        
        array(
            'id'              => 'offers',
            'type'            => 'group',
            'title'           => esc_html__('Package Offers', 'event-term'),
            'button_title'    => esc_html__('Add New Offer', 'event-term'),
            'accordion_title' => esc_html__('New Offer', 'event-term'),
            'fields'          => array(
                array(
                    'id'          => 'offer_title',
                    'type'        => 'text',
                    'title'       => esc_html__('Offer Title', 'event-term'),
                ),
                array(
                    'id'      => 'et_offer_icon',
                    'type'    => 'icon',
                    'title'   => 'Icon Field',
                    'default' => 'fa fa-check',
                ),                
            ),            
        ),
        array(
            'id'          => 'offer_btn_txt',
            'type'        => 'text',
            'title'       => esc_html__('Button Text', 'event-term'),
        ),
        array(
            'id'          => 'offer_btn_link',
            'type'        => 'text',
            'title'       => esc_html__('Button Link', 'event-term'),
        ),
      ),
    ),
    // end: a section
    
  ),
);

CSFramework_Metabox::instance( $options );
