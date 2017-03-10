<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package event-term
 */
$et_social_icons = '';
$et_copyright_text_author = '';
$et_logo = '';
if (function_exists('cs_get_option')):
    $et_social_icons = cs_get_option('et_social_icons');
    $et_copyright_text_author = cs_get_option( 'et_copyright_text_author' );
    $et_site_logo = cs_get_option( 'et_site_logo' );
    $et_logo = wp_get_attachment_url($et_site_logo);
endif;
?>
<footer id="footer" class="footer">
    <?php if(!empty($et_logo)): ?>
    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($et_logo) ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
    <?php endif; ?>
    <?php if (! empty($et_social_icons)) : ?>
    <ul class="social-media">
        <?php foreach( $et_social_icons as $profile ) : ?>
        <li><a href="<?php echo esc_url($profile['link']); ?>" title="<?php echo esc_attr($profile['name']); ?>"><i class="<?php echo esc_attr($profile['icon']); ?>"></i></a></li>                                
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>    
    <p><?php echo wp_kses_post($et_copyright_text_author) ?></p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
