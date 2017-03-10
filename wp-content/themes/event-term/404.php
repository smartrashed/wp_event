<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package event-term
 */

get_header(); ?>

<section id="content" class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error">
                    <div class="error-inner">
                        <div class="error-sign">
                            <span class="error-opps">
                                <span class="error-number left"><?php esc_html_e('4', 'event-term') ?></span>
                                <span class="error-opps-inner"><?php esc_html_e('OOPS!', 'event-term') ?></span>
                                <span class="error-number right"><?php esc_html_e('4', 'event-term') ?></span>
                            </span>
                        </div><!-- /.error-sign-->
                        <h3><?php esc_html_e('Sorry we can not find this Page', 'event-term') ?></h3>
                        <p><?php esc_html_e('Enter something went wrong and or the page does not exist anymore', 'event-term') ?></p>
                        <a href="<?php echo esc_url(home_url('/')) ?>" class="custom-btn"><?php esc_html_e('Go Back To Home Page', 'event-term') ?></a>
                    </div><!-- /.error-inner -->
                </div><!-- /.error -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<?php
get_footer();
