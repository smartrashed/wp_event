<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package event-term
 */

if ( ! is_active_sidebar( 'sidebar-widgets' ) ) {
	return;
}
?>
<aside id="sidebar" class="col-md-4 page-sidebar">
    <div class="widget-area theiaStickySidebar">
        <?php dynamic_sidebar( 'sidebar-widgets' ); ?>                            
    </div><!-- /.widget-area -->
</aside>