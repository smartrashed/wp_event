<?php
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => esc_html__('Theme Option','event-hub'),
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Event Hub Option Panel <small>by Codestar</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$options[]      = array(
    'name'        => 'et_general_settings',
    'title'       => esc_html__('General Settings', 'event-hub'),
    'icon'          => 'fa fa-cogs',
    'fields'      => array(
        array(
            'id'    => 'et_is_loading_animation',
            'type'  => 'switcher',
            'title' => esc_html__('Loading Animation', 'event-hub'),
            'default' => true
        ),        
        array(
            'id'        => 'et_site_logo',
            'type'      => 'image',
            'title'     => esc_html__('Site Logo', 'event-hub'),
            'add_title' => esc_html__('Add Logo', 'event-hub'),
        ),
        array(
            'id'         => 'et_header_style',
            'type'       => 'radio',
            'title'      => esc_html__('Header Style', 'event-hub'),
            'class'      => 'horizontal',
            'options'    => array(
                '1'    => esc_html__('Header 1', 'event-hub'),
                '2'    => esc_html__('Header 2', 'event-hub'),
                '3'    => esc_html__('Header 3', 'event-hub'),
            ),
            'default'    => '1'
        ),      
        array(
            'id'    => 'et_is_page_header',
            'type'  => 'switcher',
            'title' => esc_html__('Default Page Header', 'event-hub'),
            'label' => esc_html__('If you want to disable page header for this page switch "off" to this button', 'event-hub'),
            'default' => true
        ),
        array(
          'id'    => 'et_page_header_bg',
          'type'  => 'upload',
          'title' => esc_html__('Page Header Background', 'event-hub'),
        ),
        array(
            'id'              => 'et_social_icons',
            'type'            => 'group',
            'title'           => esc_html__('Social Profiles', 'event-hub'),
            'button_title'    => 'Add New',
            'accordion_title' => esc_html__('Add New Profile', 'event-hub'),
            'fields'          => array(

                array(
                    'id'          => 'name',
                    'type'        => 'text',
                    'title'       => esc_html__('Name', 'event-hub'),
                ),

                array(
                    'id'          => 'link',
                    'type'        => 'text',
                    'title'       => esc_html__('URL', 'event-hub'),
                ),

                array(
                    'id'          => 'icon',
                    'type'        => 'icon',
                    'title'       => esc_html__('Icon', 'event-hub'),
                ),

            ),
            'default'   => array(
                array(
                    'name'      => 'Facebook',
                    'link'      => '#facebook',
                    'icon'      => 'fa fa-facebook',
                ),
                array(
                    'name'      => 'Twitter',
                    'link'      => '#twitter',
                    'icon'      => 'fa fa-twitter',
                ),
                array(
                    'name'      => 'Google Plus',
                    'link'      => '#google-plus',
                    'icon'      => 'fa fa-google-plus',
                ),
            )
        ),
    ),
);
// ----------------------------------------
// Event Info          -
// ----------------------------------------

$options[]      = array(
    'name'        => 'et_event_info',
    'title'       => esc_html__('Event Info', 'event-hub'),
    'icon'          => 'fa fa-share-alt',
    'fields'      => array(
        array(
            'type'    => 'heading',
            'content'   => esc_html__('Event Information', 'event-hub'),
        ),                
        array(
            'id'      => 'et_event_date',
            'type'    => 'text',
            'title'   => esc_html__('Event Date', 'event-hub'),            
        ),
        array(
            'id'      => 'et_event_location',
            'type'    => 'text',
            'title'   => esc_html__('Event Location', 'event-hub'),            
        ),
        array(
            'id'      => 'et_event_date_counter',
            'type'    => 'text',
            'title'   => esc_html__('Event Date and Time for Counter', 'event-hub'),
            'desc'    => esc_html__('To display event counter properly it is must needed to enter event date and time in this format- 2017-07-12 8:00:00', 'event-hub'),
        ),
        array(
            'id'      => 'et_reg_btn',
            'type'    => 'text',
            'title'   => esc_html__('Register now button link', 'event-hub'),            
        ),
        array(
            'id'      => 'et_view_detail_btn',
            'type'    => 'text',
            'title'   => esc_html__('View detail button link', 'event-hub'),            
        ),
    ),
);
// ----------------------------------------
// Event Schedule          -
// ----------------------------------------
if (function_exists('cs_get_option')):    
    function event_hub_schedule_per_event_date() {
        $et_schedules = array();
        $et_schedules[] = array(
            'type'    => 'heading',
            'content'   => esc_html__('Crate Event Schedule', 'event-hub'),
        );
        $et_schedules[] = array(
            'id'              => 'et_date_schedules',
            'type'            => 'group',
            'title'           => esc_html__('Create Date', 'event-hub'),
            'button_title'    => esc_html__('Add New Date', 'event-hub'),
            'accordion_title' => esc_html__('Event Date', 'event-hub'),
            'fields'          => array(
                array(
                    'id'          => 'event_date',
                    'type'        => 'text',
                    'title'       => esc_html__('Event Date', 'event-hub'),
                ),                              
                array(
                    'id'          => 'event_day',
                    'type'        => 'text',
                    'title'       => esc_html__('Event Day Name', 'event-hub'),
                ),                              
                array(
                    'id'          => 'event_month_year',
                    'type'        => 'text',
                    'title'       => esc_html__('Event Month Year', 'event-hub'),
                ),                              
            ),            
        );
        $et_date_schedules = cs_get_option('et_date_schedules');
        if (!empty($et_date_schedules)):
        $i = 1;
        $et_schedules[] = array(
            'type'    => 'heading',
            'content'   => esc_html__('Per Date Schedule', 'event-hub'),
        );

        function event_hub_speaker_name() {
            $trainars = array();
            $trainars2 = array();        
            $posts = get_posts(array('post_type'=> 'et_speakers', 'post_status'=> 'publish', 'nopaging' => true)); 
            $array = json_decode(json_encode($posts), true);
            foreach ($array as $post_name => $post_value) {
                $trainars[$post_name] = $post_value['post_title'];
            }
            foreach ($array as $post_name => $post_value) {
                $trainars2[$post_name] = $post_value['ID'];
            }
            $trainer_name = array_reverse( $trainars );
            $trainer_name2 = array_reverse( $trainars2 );
            return(array_combine($trainer_name2,$trainer_name));
        }        
        foreach ($et_date_schedules as $et_date_schedule) {
            $et_schedules[] = array(
                'id'              => 'schedule_per_date_'.$i++,
                'type'            => 'group',
                'title'           => $et_date_schedule['event_date'] .' '. $et_date_schedule['event_month_year']. 'Schedule',
                'button_title'    => esc_html__('Add New Schedule', 'event-hub'),
                'accordion_title' => esc_html__('Schedule', 'event-hub'),
                'fields'          => array(
                    array(
                        'id'          => 'event_time',
                        'type'        => 'text',
                        'title'       => esc_html__('Time', 'event-hub'),
                    ),
                    array(
                        'id'          => 'event_session',
                        'type'        => 'text',
                        'title'       => esc_html__('Session', 'event-hub'),
                    ),
                    array(
                        'id'             => 'event_speakers',
                        'type'           => 'select',
                        'title'          =>  esc_html__('Select Speakers','event-hub'),
                        'options'        => event_hub_speaker_name(),
                        'default_option' =>  esc_html__('Select a speaker','event-hub'),
                        'attributes' => array(
                            'multiple' => 'multiple',
                            'style'    => 'width: 200px; height: 200px;'
                        ),
                    ),
                    array(
                        'id'          => 'event_venue',
                        'type'        => 'text',
                        'title'       => esc_html__('Venue', 'event-hub'),
                    ),                             
                ),            
            );        
        }
        endif;
        return $et_schedules;
    }
endif;
$options[]      = array(
    'name'        => 'et_event_schedule',
    'title'       => esc_html__('Event Schedule', 'event-hub'),
    'icon'          => 'fa fa-share-alt',
    'fields'      => event_hub_schedule_per_event_date(),
);
// ----------------------------------------
// a option section for Typography            -
// ----------------------------------------
$options[]      = array(
    'name'        => 'et_typography',
    'title'       => esc_html__('Typography', 'event-hub'),
    'icon'          => 'fa fa-check',
    'fields'      => array(        
        array(
            'type'    => 'heading',
            'content'   => esc_html__('Body', 'event-hub'),
        ),        
        array(
            'id'        => 'et_font_family',
            'type'      => 'typography',
            'title'     => esc_html__('Body font family:', 'event-hub'),
            'default'   => array(
                'family'  => 'Montserrat',
                'font'    => 'google', // this is helper for output ( google, websafe, custom )                
            ),
            'variant'   => false,
        ),
        array(
            'id'      => 'et_font_size',
            'type'    => 'number',
            'title'   => esc_html__('Body font size:', 'event-hub'),
            'default'   => '15',
            'after'   => ' <i class="cs-text-muted">(px)</i>',                
        ),        
        array(
            'type'    => 'heading',
            'content'   => esc_html__('Title', 'event-hub'),
        ),
        array(
            'id'        => 'et_title_font_family',
            'type'      => 'typography',
            'title'     => esc_html__('Title font family:', 'event-hub'),
            'default'   => array(
                'family'  => 'Poppins',
                'font'    => 'google', // this is helper for output ( google, websafe, custom )
            ),
            'variant'   => false,
        ),
        array(
            'id'          => 'et_title_font_style',
            'type'        => 'select',
            'title'       => esc_html__('Title font-style:', 'event-hub'),
            'options'     => array(
                'normal'  => esc_html__('Normal', 'event-hub'),
                'italic'  => esc_html__('Italic', 'event-hub'),
                'oblique' => esc_html__('Oblique', 'event-hub'),                               
            ),
            'default'  => 'normal',
        ),     
        array(
            'type'    => 'heading',
            'content'   => esc_html__('Menu', 'event-hub'),
        ),
        array(
            'id'        => 'et_menu_font_family',
            'type'      => 'typography',
            'title'     => esc_html__('Menu font family:', 'event-hub'),
            'default'   => array(
                'family'  => 'Montserrat',
                'font'    => 'google', // this is helper for output ( google, websafe, custom )
            ),
            'variant'   => false,
        ),        
        array(
            'id'             => 'et_menu_transform',
            'type'           => 'select',
            'title'          => esc_html__('Menu text-transform:', 'event-hub'),
            'options'     => array(
                'uppercase'  => esc_html__('Uppercase', 'event-hub'),
                'none'       => esc_html__('None', 'event-hub'),
                'capitalize' => esc_html__('Capitalize', 'event-hub'),                
                'lowercase'  => esc_html__('Lowercase', 'event-hub'),
            ),
            'default'  => 'uppercase',
        ),
    ),        
);
// ----------------------------------------
// a contact info sidebar           -
// ----------------------------------------
$options[]        = array(
    'name'        => 'et_contact_page_option',
    'title'       => esc_html__('Google Map Settings', 'event-hub'),
    'icon'        => 'fa fa-envelope-o',
    'fields'      => array(                                       
        array(
            'type'    => 'heading',
            'content'   => esc_html__('Location Map Section', 'event-hub'),
        ),
        array(
            'id'      => 'et_google_api',
            'type'    => 'text',
            'title'   => esc_html__('Enter Google API Key', 'event-hub'),
            'desc'    => esc_html__('Create your google map api from https://developers.google.com/maps/documentation/javascript/tutorial', 'event-hub'),
            'sanitize' => false,
        ),
        array(
            'id'    => 'et_map_title',
            'type'  => 'text',
            'title' => esc_html__('Title', 'event-hub'),
        ),        
        array(
            'id'    => 'et_map_latitude',
            'type'  => 'text',
            'title' => esc_html__('Latitude', 'event-hub'),
            'default' => '23.8103',
        ),
        array(
            'id'    => 'et_map_longitude',
            'type'  => 'text',
            'title' => esc_html__('Longitude', 'event-hub'),
            'default' => '90.4125',
        ),
        array(
            'id'    => 'et_map_zoom',
            'type'  => 'text',
            'title' => esc_html__('Map Zoom', 'event-hub'),
            'default' => '4',
        ),
    ),        
);
// ----------------------------------------
// Footer sections           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'et_footer_settings',
    'title'       => esc_html__('Footer Settings', 'event-hub'),
    'icon'          => 'fa fa-share-alt',
    'fields'      => array(
        array(
            'type'    => 'heading',
            'content'   => esc_html__('Footer', 'event-hub'),
        ),        
        array(
            'id'      => 'et_copyright_text_author',
            'type'    => 'textarea',
            'title'   => esc_html__('Copyright text', 'event-hub'),
            'desc'    => esc_html__('Write your copyright text for footer. It is a html tag supported area.', 'event-hub'),
        ),
    ),
);
CSFramework::instance( $settings, $options );
