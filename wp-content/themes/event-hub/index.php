<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package event-hhub
 */

get_header(); ?>

<!--  start main content section  -->
<section id="content" class="blog-page">
    <div class="container">
        <div class="row">
            <!--  start main content  -->
            <main id="main-content" class="col-md-8">
                <div class="theiaStickySidebar">

		<?php
		if ( have_posts() ) :

			/*if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;*/

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content','blog' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

					</div>
                 </main>
                <!-- end main conent  -->    
                <?php get_sidebar() ; ?>
            </div><!-- /.row -->

        </div><!-- /.container -->
    </section>
    <!--  end main content section  -->

<?php

get_footer();
