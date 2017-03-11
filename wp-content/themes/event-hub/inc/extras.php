<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package event-hub
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function event_hub_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'event_hub_body_classes' );

//add post view counter
function event_hub_post_views($post_ID) {

    //Set the name of the Posts Custom Field.
    $count_key = 'post_views_count';

    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);

    //If the the Post Custom Field value is empty.
    if($count == ''){
        $count = 0; // set the counter to zero.

        //Delete all custom fields with the specified key from the specified post.
        delete_post_meta($post_ID, $count_key);

        //Add a custom (meta) field (Name/value)to the specified post.
        add_post_meta($post_ID, $count_key, '0');
        return $count . '';

        //If the the Post Custom Field value is NOT empty.
    }else{
        $count++; //increment the counter by 1.
        //Update the value of an existing meta key (custom field) for the specified post.
        update_post_meta($post_ID, $count_key, $count);

        //If statement, is just to have the singular form 'View' for the value '1'
        if($count == '1'){
            return $count . '';
        }
        //In all other cases return (count) Views
        else {
            return $count . '';
        }
    }
}
add_action( 'init', 'event_hub_post_views' );

function event_hub_new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'event_hub_new_excerpt_more');
