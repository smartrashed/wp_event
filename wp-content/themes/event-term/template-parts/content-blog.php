<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package event-term
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry-single'); ?>>
        <div class="entry-header">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="entry-content-outer">
            <div class="entry-content">
                <?php 
                if ( is_single() ) :
			the_title( '<h2 class="title">', '</h2>' );
		else :
			the_title( '<h2 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
                ?>
                <div class="meta-post">
                    <span class="date"><i class="fa fa-calendar"></i><?php event_term_posted_on(); ?></span>                                        
                    <?php 
                        if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
                                echo '<span class="border"></span><i class="fa fa-comment"></i><span class="comments-link">';
                                /* translators: %s: post title */
                                comments_popup_link( 'Leave a coment', '1 comment', '% comments');
                                echo '</span>';
                        }
                    ?>                    
                </div>
                <?php                 
                the_excerpt(); 
                ?>		
                <a href="<?php echo get_permalink() ?>" class="custom-btn read-more hvr-bounce-to-bottom"><?php esc_html_e('Read More','event-term') ?></a>
            </div><!-- /.content -->
        </div><!-- /.content-outer -->
</article><!-- #post-## -->
