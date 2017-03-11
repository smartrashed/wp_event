<?php
$eh_transparent_menu = '';
if (function_exists('cs_get_option')):
    $eh_site_logo = cs_get_option( 'et_site_logo' );
    $eh_logo = wp_get_attachment_url($eh_site_logo);
    if (is_page()):        
        $eh_custom_page_options = get_post_meta( get_the_ID(), '_eh_custom_page_options', true );
        $eh_transparent_menu = @$eh_custom_page_options['eh_transparent_menu'];
    endif;
endif;
?>
<!-- start header  -->
<header id="header1">
    <nav id="primary-menu" class="primary-menu <?php echo ($eh_transparent_menu == '1') ? 'transparent-bg-menu menu-v1' : 'color-bg-menu menu-v1'; ?>">
        <div class="primary-menu-inner">
            <div class="container">
                <div class="row">
                    <div class="menu-area">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only"><?php _e('Toggle navigation', 'event-term') ?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <?php if(!empty($et_logo)): ?>
                            <a class="navbar-brand logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($et_logo) ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
                            <a class="navbar-brand scroll-logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($et_logo) ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
                            <?php else : ?>
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><h1 class="site-title"><?php echo esc_attr(get_bloginfo('name')); ?></h1></a>
                            <?php endif; ?>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php
                            if ( has_nav_menu( 'primary' ) ):
                                wp_nav_menu( array( 
                                    'menu_id' => 'navbar-menu', 
                                    'menu_class' => 'nav navbar-nav', 
                                    'container' => false,
                                    'theme_location' => 'primary',
                                    'walker' => new event_hub_bootstrap_navwalker(),
                                    'fallback_cb'=> false) );
                            endif;
                            if(function_exists('is_woocommerce')):
                            ?>                            
                            <div class="menu-shopping-cart">
                                <div class="cart-icon">
                                    <span><i class="fa fa-shopping-cart"></i>
                                        <span class="item-counter">0</span>
                                    </span>
                                    <?php //echo event_hub_woocommerce_cart_dropdown(); ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.menu-area -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </nav>
</header>
<!-- end header  -->
