<?php 
/**
 * Enqueue all theme scripts and styles on admin
 *
 * @package EventTerm
 * @author CodexCoder
 */
// Admin Scripts
    wp_enqueue_script( 'event-term-admin', EVENTTERM_ASSETS . '/js/admin-scripts.js', array('jquery'), false, true );