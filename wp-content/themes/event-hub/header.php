<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package event-hub
 */
$eh_use_theme_option = '';
$eh_is_banner = '';
$eh_is_page_header = 1;
$eh_header_style = '';
$is_loading_animation = '';
$eh_page_header_bg = '';
$eh_custom_page_options = '';
if (function_exists('cs_get_option')):
    $is_loading_animation = cs_get_option( 'eh_is_loading_animation' );
    if (is_page()):
        $eh_custom_page_options = get_post_meta( get_the_ID(), '_eh_custom_page_options', true );
        $eh_use_theme_option = isset($eh_custom_page_options['eh_custom_page_settings']) ? $eh_custom_page_options['eh_custom_page_settings'] : '';
        $eh_is_banner = isset($eh_custom_page_options['eh_is_banner']) ? $eh_custom_page_options['eh_is_banner'] : '';
    endif;
    if (is_page() && $eh_use_theme_option == '1'):
        $eh_header_style = isset($eh_custom_page_options['eh_header_style']) ? $eh_custom_page_options['eh_header_style'] : '';
        $eh_is_page_header = isset($eh_custom_page_options['eh_is_page_header']) ? $eh_custom_page_options['eh_is_page_header'] : '';
        $eh_page_header_bg = isset($eh_custom_page_options['eh_page_header_bg']) ? $eh_custom_page_options['eh_page_header_bg'] : '';
    else :
        $eh_header_style = cs_get_option( 'eh_header_style' );
        $eh_is_page_header = cs_get_option( 'eh_is_page_header' );    
    endif;
    if (empty($eh_page_header_bg)):
        $eh_page_header_bg = cs_get_option( 'eh_page_header_bg' );
    endif;
endif;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php if($is_loading_animation == 1): ?>
    <div id="loading" class="animated_bg">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
                <div class="object" id="object_five"></div>
                <div class="object" id="object_six"></div>
                <div class="object" id="object_seven"></div>
                <div class="object" id="object_eight"></div>
                <div class="object" id="object_nine"></div>
            </div>
        </div>
    </div>
    <?php endif; ?>
     <?php
        if (!empty($eh_header_style)):
            get_template_part('template-parts/headers/header', $eh_header_style); 
        else :
            get_template_part('template-parts/headers/header', '1');
        endif;        
    ?>

    <?php
        if (is_page() && $eh_is_banner == '1'):
            $eh_banner_style = $eh_custom_page_options['eh_banner_style'];
            get_template_part('template-parts/banners/banner', $eh_banner_style); 
        endif;        
    ?>

    <!--  page header section start  -->
     <?php if (!is_front_page() && $eh_is_page_header == '1' && !is_404()): ?>            
    
    <!--  page header section start  -->
    <section class="page-header-content" <?php if (!empty($eh_page_header_bg)): echo 'style="background-image:url('.esc_url($eh_page_header_bg).')"'; endif; ?>>
            <div class="overlay"></div>
            <div class="container">
                <div class="page-header-content-inner">
                    <h3 class="page-title"><?php
                        if( is_archive()  ) {
                            the_archive_title();
                        } else if (is_home()) {
                            wp_title('');
                        } else if(is_page()) {
                            the_title();
                        } else if(is_search()) {
                            printf( esc_html__( 'Search Results for: %s', 'event-hub' ), '<span>' . get_search_query() . '</span>' );
                        } else {
                            the_title();
                        }                             
                    ?></h3>
                    <?php event_hub_breadcrumbs('breadcrumb'); ?>
                </div>
            </div><!-- /.container -->
    </section>
    <!--  page header section End  -->
    <?php endif; ?>
    <!--  page header section End  -->
