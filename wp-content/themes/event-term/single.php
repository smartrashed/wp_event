<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package event-term
 */
get_header();
?>

<section class="blog-page section-padding">
    <div class="container">
        <div class="row">
            <!--  start main content  -->
            <main id="main-content" class="col-md-8">
                <div class="theiaStickySidebar">
                    <?php
                    if (have_posts()) :
                        /* Start the Loop */
                        while (have_posts()) : the_post();

                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part('template-parts/content', get_post_format());
                            
                        endwhile;
                                               
                        
                    else :

                        get_template_part('template-parts/content', 'none');

                    endif;

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>                            
                </div>
            </main><!-- #main -->
            <?php get_sidebar(); ?>
        </div><!-- #primary -->
    </div>	
</section>

<?php
get_footer();
