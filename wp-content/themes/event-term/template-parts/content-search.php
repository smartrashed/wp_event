<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package event-term
 */

?>

<article id="post-<?php the_ID(); ?>" class="entry-single">
        <div class="entry-content-outer">
            <div class="entry-content">
                <?php 
                if ( is_single() ) :
			the_title( '<h2 class="title">', '</h2>' );
		else :
			the_title( '<h2 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
                ?>
                <?php the_excerpt(); ?>                
            </div><!-- /.content -->
        </div><!-- /.content-outer -->
</article><!-- #post-## -->
