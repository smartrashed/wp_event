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
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
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
                                <a class="navbar-brand logo" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo"></a>
                                <a class="navbar-brand scroll-logo" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-logo.png" alt="Logo"></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <?php
                                    wp_nav_menu( array( 
                                    'menu_id' => 'navbar-menu', 
                                    'menu_class' => 'nav navbar-nav', 
                                    'container' => false,
                                    'theme_location' => 'primary',
                                    'walker' => new event_hub_bootstrap_navwalker(),
                                    'fallback_cb'=> false) );
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
    <!--  page header section End  -->
