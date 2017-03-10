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
                    <span class="border"></span>
                    <span>By <?php the_author_posts_link(); ?></span>
                    <span class="border"></span>
                    <span><i class="fa fa-eye"></i> <?php if(function_exists('event_term_post_views')){echo event_term_post_views(get_the_ID()); }?></span>
                </div>
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'event-term' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'event-term' ),
				'after'  => '</div>',
			) );
		?>
                <div class="entry-footer">
                    <div class="col-md-6">
                        <div class="entry-tag">
                            <?php event_term_entry_footer(); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="social-media">
                            <?php $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                            <li><?php esc_html_e('Share: ','event-term') ?></li>
                            <li><a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="http://twitter.com/home?status=<?php the_title(); ?> <?php echo urlencode(get_permalink($post->ID)); ?>" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink($post->ID)); ?>&title=<?php the_title(); ?>" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="google-plus" href="https://plusone.google.com/_/+1/confirm?hl=en&amp;url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;name=<?php the_title(); ?>" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="pinterest" href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div><!-- /.entry-footer -->
                <?php 
                    edit_post_link(
                            sprintf(
                                    /* translators: %s: Name of current post */
                                    esc_html__( 'Edit %s', 'event-term' ),
                                    the_title( '<span class="single-edit screen-reader-text">"', '"</span>', false )
                            ),
                            '<br><span class="edit-link">',
                            '</span>'
                    );
                ?>
            </div><!-- /.content -->
        </div><!-- /.content-outer -->
</article><!-- #post-## -->
