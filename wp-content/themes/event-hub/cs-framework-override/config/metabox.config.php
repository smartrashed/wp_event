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
  'id'        => '_eh_custom_page_options',
  'title'     => esc_html__('Custom Page Options', 'event-hub'),
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
                'id'    => 'eh_custom_page_settings',
                'type'  => 'switcher',
                'title' => 'Custom Page Settings',
                'label' => 'if you want custom settings for this page please switch "on" to this button',
                'default' => false
            ),
            array(
                'id'         => 'eh_header_style',
                'type'       => 'radio',
                'title'      => esc_html__('Header Style', 'event-hub'),
                'class'      => 'horizontal',
                'options'    => array(
                    '1'    => esc_html__('Header 1', 'event-hub'),
                    '2'    => esc_html__('Header 2', 'event-hub'),
                                       
                ),
                'default'    => '1',
                'dependency' => array( 'eh_custom_page_settings', '==', 'true' ),                
            ),
            array(
                'id'    => 'eh_transparent_menu',
                'type'  => 'switcher',
                'title' => 'Transparent Menu',
                'label' => 'If you want to make header 1 menu transparent please switch "on" to this button',
                'default' => false,
                'dependency' => array('eh_custom_page_settings|eh_header_style_1', '==|==', 'true|true'),
            ),            
            array(
                'id'    => 'eh_is_page_header',
                'type'  => 'switcher',
                'title' => esc_html__('Page Header', 'event-hub'),
                'label' => esc_html__('If you want to disable page header for this page switch "off" to this button', 'event-hub'),
                'default' => true,
                'dependency' => array( 'eh_custom_page_settings', '==', 'true' ),
            ),
            array(
                'id'    => 'eh_page_header_bg',
                'type'  => 'upload',
                'title' => esc_html__('Page Header Background', 'event-hub'),
                'dependency' => array( 'eh_custom_page_settings|eh_is_page_header', '==|==', 'true|true' ),
            ),
            array(
                'type'    => 'subheading',
                'content'   => esc_html__('Banner', 'event-hub'),
            ),
            array(
                'id'    => 'eh_is_banner',
                'type'  => 'switcher',
                'title' => esc_html__('Page banner with event counter', 'event-hub'),
                'label' => esc_html__('If you want to display a banner for this page switch "on" to this button', 'event-hub'),
                'default' => false
            ),
            array(
                'id'         => 'eh_banner_style',
                'type'       => 'radio',
                'title'      => esc_html__('Banner Style', 'event-hub'),
                'class'      => 'horizontal',
                'options'    => array(
                    '1'    => esc_html__('Banner 1', 'event-hub'),
                    '2'    => esc_html__('Banner 2', 'event-hub'),
                    
                ),
                'default'    => '1',
                'dependency' => array( 'eh_is_banner', '==', 'true' ),
            ),
            array(
                'id'    => 'eh_page_banner',
                'type'  => 'upload',
                'title' => esc_html__('Banner', 'event-hub'),
                'dependency' => array( 'eh_is_banner', '==', 'true' ),
            ),
            array(
                'id'      => 'eh_banner_title',
                'type'    => 'text',
                'title'   => esc_html__('Banner Title', 'event-hub'),
                'dependency' => array( 'eh_is_banner', '==', 'true' ),
            ),
            array(
                'id'      => 'eh_banner_sub_title',
                'type'    => 'textarea',
                'title'   => esc_html__('Banner sub title ', 'event-hub'),
                'dependency' => array( 'eh_is_banner', '==', 'true' ),
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
  'id'        => '_eh_custom_testimonial_options',
  'title'     => esc_html__('Custom Post Options', 'event-hub'),  
  'post_type' => 'eh_testimonial',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    // begin: a section
    array(
      'name'  => 'client',
      'icon'  => 'fa fa-eye',
      'fields' => array(
        array(
            'id'          => 'eh_client_designation',
            'type'        => 'text',
            'title'       => esc_html__('Client Designation', 'event-hub'), 
        ),
        array(
          'id'      => 'eh_client_image',
          'type'    => 'upload',
          'title'   => esc_html__('Client Image (recommended size 150*150)', 'event-hub'),          
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
  'id'        => '_eh_custom_speakers_options',
  'title'     => esc_html__('Team Member Info', 'event-hub'),
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
          'id'    => 'eh_speakers_designation',
          'type'  => 'text',
          'title' => esc_html__('Designation', 'event-hub'),
        ),
        array(
          'id'    => 'eh_speakers_facebook',
          'type'  => 'text',
          'title' => esc_html__('Facebook', 'event-hub'),
        ),
        array(
          'id'    => 'eh_speakers_twitter',
          'type'  => 'text',
          'title' => esc_html__('Twitter', 'event-hub'),
        ),
        array(
          'id'    => 'eh_speakers_in',
          'type'  => 'text',
          'title' => esc_html__('Linked In', 'event-hub'),
        ),
        array(
          'id'    => 'eh_speakers_gplus',
          'type'  => 'text',
          'title' => esc_html__('Google Plus', 'event-hub'),
        ),
        array(
          'id'    => 'eh_speakers_igram',
          'type'  => 'text',
          'title' => esc_html__('Instagram', 'event-hub'),
        ),
      ), // end: fields
    ), // end: a section
    

  ),
);

// -----------------------------------------
// Pricing Table Metabox Options           -
// -----------------------------------------
$options[]    = array(
  'id'        => '_eh_custom_pricing_table_options',
  'title'     => esc_html__('Package Options', 'event-hub'),
  'post_type' => 'eh_pricing_table',
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
            'title'       => esc_html__('Package Rate', 'event-hub'),
        ),        
        array(
            'id'              => 'offers',
            'type'            => 'group',
            'title'           => esc_html__('Package Offers', 'event-hub'),
            'button_title'    => esc_html__('Add New Offer', 'event-hub'),
            'accordion_title' => esc_html__('New Offer', 'event-hub'),
            'fields'          => array(
                array(
                    'id'          => 'offer_title',
                    'type'        => 'text',
                    'title'       => esc_html__('Offer Title', 'event-hub'),
                ),
                array(
                    'id'      => 'eh_offer_icon',
                    'type'    => 'icon',
                    'title'   => 'Icon Field',
                    'default' => 'fa fa-check',
                ),                
            ),            
        ),
        array(
            'id'          => 'offer_btn_txt',
            'type'        => 'text',
            'title'       => esc_html__('Button Text', 'event-hub'),
        ),
        array(
            'id'          => 'offer_btn_link',
            'type'        => 'text',
            'title'       => esc_html__('Button Link', 'event-hub'),
        ),
      ),
    ),
    // end: a section
    
  ),
);

CSFramework_Metabox::instance( $options );
