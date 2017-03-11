<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package event-hub
 */
if ( ! is_active_sidebar( 'footer-sidebar' ) ) {
    return;
}
$eh_copyright_text_author = '';

if (function_exists('cs_get_option')):
    
    $eh_copyright_text_author = cs_get_option( 'eh_copyright_text_author' );
    
endif;
?>
<!--  footer start   -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                            <div class="f-widget">
                                     <?php dynamic_sidebar('footer-sidebar'); ?>
                            </div>             
                    </div>     
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-top -->
        <div class="footer-bottom">
            <p>Copyright &copy; 2016. Design and Development by <a href="#"><?php echo $eh_copyright_text_author ?></a></p>
        </div>
    </footer>
    <!--  footer end   -->

<?php wp_footer(); ?>
</body>
</html>
