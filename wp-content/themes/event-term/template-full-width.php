<?php
/*
Template Name: Template Full Width
*/
get_header(); ?>

    <div class="content-area template-full-width">
            <?php
            while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'template' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                            comments_template();
                    endif;

            endwhile; // End of the loop.
            ?>
    </div><!-- #primary --> 
<?php
get_footer();

