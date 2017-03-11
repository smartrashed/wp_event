<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function event_hub_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'event-hub' ),
		'id'            => 'sidebar-widgets',
		'description'   => esc_html__( 'Add widgets here.', 'event-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


	        
        register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar', 'event-hub' ),
		'id'            => 'footer-sidebar',
		'description'   => esc_html__( 'Widgets in this area will be shown in Footer area', 'event-hub' ),
		'before_widget' => '<div id="%1$s" class="widget-f  %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'event_hub_widgets_init' );