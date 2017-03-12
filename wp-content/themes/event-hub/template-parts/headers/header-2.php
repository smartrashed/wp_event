<?php 
if (function_exists('cs_get_option')):
    $eh_site_logo = cs_get_option( 'eh_site_logo' );
    $eh_logo = wp_get_attachment_url($eh_site_logo);
    $eh_view_detail_btn = cs_get_option('eh_view_detail_btn');
endif;
?>
<!-- start header  -->
<header id="header">
        <nav id="primary-menu" class="primary-menu">
            <div class="primary-menu-inner">
                <div class="container">
                    <div class="row">
                        <div class="menu-area">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <?php if(!empty($eh_logo)): ?>
                            <a class="navbar-brand logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($eh_logo) ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
                            <a class="navbar-brand scroll-logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($eh_logo) ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
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
                            ?>
                                <div class="menu-shopping-cart">
                                    <div class="cart-icon">
                                        <span><i class="fa fa-shopping-cart"></i>
                                            <span class="item-counter">04</span>
                                        </span>
                                        <div class="menu-cart-content">
                                            <div class="menu-cart-item">
                                                <div class="menu-cart-img">
                                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-cart-img1.jpg" alt="cart-img"></a>
                                                </div>
                                                <div class="menu-cart-desc">
                                                    <a href="#">Eventrum skractch</a>
                                                    <p>1x <span>$345.00</span></p>
                                                </div>
                                                <div class="menu-cart-btn">
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                            <div class="menu-cart-item">
                                                <div class="menu-cart-img">
                                                    <a href="#"><img src="assets/images/menu-cart-img1.jpg" alt="cart-img"></a>
                                                </div>
                                                <div class="menu-cart-desc">
                                                    <a href="#">Eventrum skractch</a>
                                                    <p>1x <span>$345.00</span></p>
                                                </div>
                                                <div class="menu-cart-btn">
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                            <div class="menu-cart-bottom">
                                                <div class="sub-total">
                                                    <p>Subtotal: <span>$546.00</span></p>
                                                </div>
                                                <div class="menu-cart-action">
                                                    <button class="menu-cart-btn-action">CheckOut</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.menu-area -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
        </nav>
    </header>
    <!-- end header  -->