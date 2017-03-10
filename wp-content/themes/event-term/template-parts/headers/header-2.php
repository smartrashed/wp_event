<?php 
if (function_exists('cs_get_option')):
    $et_site_logo = cs_get_option( 'et_site_logo' );
    $et_logo = wp_get_attachment_url($et_site_logo);
    $et_view_detail_btn = cs_get_option('et_view_detail_btn');
    $et_social_icons = cs_get_option('et_social_icons');
endif;
?>
<!-- start header  -->
<header id="header2">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <?php if (! empty($et_social_icons)) : ?>
                    <ul class="social-media">
                        <?php foreach( $et_social_icons as $profile ) : ?>
                        <li><a href="<?php echo esc_url($profile['link']); ?>" title="<?php echo esc_attr($profile['name']); ?>"><i class="<?php echo esc_attr($profile['icon']); ?>"></i></a></li>                                
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>  
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <?php if(!empty($et_logo)): ?>
                    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($et_logo) ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>                                    
                    <?php else : ?>
                    <a class="" href="<?php echo esc_url(home_url('/')); ?>"><h1 class="site-title"><?php echo esc_attr(get_bloginfo('name')); ?></h1></a>
                    <?php endif; ?> 
                </div>                
                <div class="col-md-4 col-sm-4">
                    <?php if(function_exists('is_woocommerce')): ?>
                    <div class="new-hstyle menu-shopping-cart">
                        <div class="cart-icon">
                            <span><i class="fa fa-shopping-cart"></i>
                                <span class="item-counter">0</span>
                            </span>
                            <?php echo event_term_woocommerce_cart_dropdown(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($et_view_detail_btn)): ?>
                    <a href="<?php echo esc_url($et_view_detail_btn) ?>" class="view-details"><?php esc_html_e('View Details', 'event-term') ?></a>
                    <?php endif; ?>
                </div>                
            </div>
        </div>
    </div>
    <nav id="primary-menu" class="primary-menu menu-v2">
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
                            <?php else : ?>
                            <a class="navbar-brand logo" href="<?php echo esc_url(home_url('/')); ?>"><h1 class="site-title"><?php echo esc_attr(get_bloginfo('name')); ?></h1></a>                            
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
                                        'walker' => new event_term_bootstrap_navwalker(),
                                        'fallback_cb'=> false) );
                                endif;
                            ?>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.menu-area -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </nav>
</header>
<!-- end header  -->