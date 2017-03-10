<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eventrum Template</title>

	<!-- Meta --> 
    <meta name="description" content="Eventrum Template is a Creative Multipurpose HTML5 Event Template">
    <meta name="keywords" content="Event, HTML5, Multipurpose, Template">
    <meta name="author" content="CodexCoder">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo  get_template_directory_uri() ?>/assets/images/favicon.ico" />

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Framework Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri() ?>/assets/css/bootstrap.min.css"/>

    <!-- Fonts Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri() ?>/assets/css/font-awesome.min.css"/> 

    <!-- Plugins Styles --> 
    <link rel="stylesheet" href="<?php echo  get_template_directory_uri() ?>/assets/css/jquery.fs.boxer.min.css">
    <link rel="stylesheet" href="<?php echo  get_template_directory_uri() ?>/assets/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo  get_template_directory_uri() ?>/assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo  get_template_directory_uri() ?>/assets/css/hover-min.css">
    <!-- Project Styles -->
    <link rel="stylesheet" href="<?php echo  get_template_directory_uri() ?>/assets/css/style.css"> 
    <link rel="stylesheet" href="<?php echo  get_template_directory_uri() ?>/assets/css/responsive.css"> 
</head>
<body>
	<!--  preloader  -->
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object"></div>
				<div class="object"></div>
				<div class="object"></div>
				<div class="object"></div>
				<div class="object"></div>
				<div class="object"></div>
				<div class="object"></div>
				<div class="object"></div>
				<div class="object"></div>
				<div class="object"></div>
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
								<a class="navbar-brand logo" href="index.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/logo.png" alt="Logo"></a>
								<a class="navbar-brand scroll-logo" href="index.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/main-logo.png" alt="Logo"></a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="dropdown menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-376">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
										<ul class="dropdown-menu sub-menu menu-sub-content">
											<li><a href="index.html">Homepage One</a></li>
											<li><a href="homepage2.html">Homepage Two</a></li>
										</ul>
									</li>
									<li><a href="about.html">About</a></li>
									<li class="dropdown menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-376">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
										<ul class="dropdown-menu sub-menu menu-sub-content">
											<li><a href="pricing-table.html">Pricing Table</a></li>
											<li><a href="event-schedule.html">Event Schedule</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li><a href="error.html">404 page</a></li>
											<li><a href="faq.html">FAQ</a></li>
										</ul>
									</li>
									<li><a href="sponsor.html">Sponsors</a></li>
									<li class="dropdown menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-376">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
										<ul class="dropdown-menu sub-menu menu-sub-content">
											<li><a href="shop-page.html">Shop Page</a></li>
											<li><a href="product-detail.html">Product Details</a></li>
											<li><a href="cart-page.html">Cart Page</a></li>
										</ul>
									</li>
									<li class="dropdwon menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-376 active">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
										<ul class="dropdown-menu sub-menu menu-sub-content">
											<li class="active-child-menu"><a href="blog.html">Blog Page</a></li>
											<li><a href="blog-single.html">Blog Single</a></li>
										</ul>
									</li>
									<li><a href="speaker.html">Speaker</a></li>
								</ul>
								<div class="menu-shopping-cart">
									<div class="cart-icon">
										<span><i class="fa fa-shopping-cart"></i>
											<span class="item-counter">04</span>
										</span>
										<div class="menu-cart-content">
											<div class="menu-cart-item">
												<div class="menu-cart-img">
													<a href="#"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/menu-cart-img1.jpg" alt="cart-img"></a>
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
													<a href="#"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/menu-cart-img1.jpg" alt="cart-img"></a>
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
	
	<!--  page header section start  -->
	<section class="page-header-content">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="page-header-content-inner">
	                <h3 class="page-title">Blog Page</h3>
	                <ul class="breadcrumb">
	                    <li><a href="#">Home</a></li>
	                    <li class="active">Blog Page</li>
	                </ul>
	            </div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<!--  page header section End  -->


	<!--  start main content section  -->
	<section id="content" class="blog-page">
		<div class="container">
			<div class="row">
				<!--  start main content  -->
				<main id="main-content" class="col-md-8">
					<div class="theiaStickySidebar">
						<div class="post-item">
							<div class="post-thumb">
								<a href="blog-single.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/01.jpg" alt="Thumb"></a>
							</div>
							<div class="content-outer">
								<div class="content">
									<h3 class="title"><a href="#">Holisticly integrate premier markets.</a></h3>
									<div class="meta-post">
										<span class="date"><i class="fa fa-calendar"></i>Jan 03, 2016</span>
										<span class="border"></span>
										<a href="#" class="comment"><i class="fa fa-comment"></i>09 Comment</a>
										<span class="border"></span>
										<span class="like"><i class="fa fa-heart"></i> 26 likes</span>
									</div>
									<div class="excerpt">
										Rapidiously maintain intuitive process improvements through an expanded array of scenarios. Holisticly engineer customized partnerships vis-a-vis seamless content. Enthusiastically build bleeding-edge alignments before exceptional ideas. Objectively fabricate go forward communities whereas alternative ROI.
									</div>
									<a href="blog-single.html" class="custom-btn hvr-bounce-to-bottom">Load More</a>
								</div><!-- /.content -->
							</div><!-- /.content-outer -->
						</div><!-- /.post-item -->
						<div class="post-item">
							<div class="post-thumb">
								<a href="blog-single.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/02.jpg" alt="Thumb"></a>
							</div>
							<div class="content-outer">
								<div class="content">
									<h3 class="title"><a href="#">Holisticly integrate premier markets.</a></h3>
									<div class="meta-post">
										<span class="date"><i class="fa fa-calendar"></i>Jan 03, 2016</span>
										<span class="border"></span>
										<a href="#" class="comment"><i class="fa fa-comment"></i>09 Comment</a>
										<span class="border"></span>
										<span class="like"><i class="fa fa-heart"></i> 26 likes</span>
									</div>
									<div class="excerpt">
										Rapidiously maintain intuitive process improvements through an expanded array of scenarios. Holisticly engineer customized partnerships vis-a-vis seamless content. Enthusiastically build bleeding-edge alignments before exceptional ideas. Objectively fabricate go forward communities whereas alternative ROI.
									</div>
									<a href="blog-single.html" class="custom-btn hvr-bounce-to-bottom">Load More</a>
								</div><!-- /.content -->
							</div><!-- /.content-outer -->
						</div><!-- /.post-item -->
						<div class="post-item">
							<div class="post-thumb">
								<a href="blog-single.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/03.jpg" alt="Thumb"></a>
							</div>
							<div class="content-outer">
								<div class="content">
									<h3 class="title"><a href="#">Holisticly integrate premier markets.</a></h3>
									<div class="meta-post">
										<span class="date"><i class="fa fa-calendar"></i>Jan 03, 2016</span>
										<span class="border"></span>
										<a href="#" class="comment"><i class="fa fa-comment"></i>09 Comment</a>
										<span class="border"></span>
										<span class="like"><i class="fa fa-heart"></i> 26 likes</span>
									</div>
									<div class="excerpt">
										Rapidiously maintain intuitive process improvements through an expanded array of scenarios. Holisticly engineer customized partnerships vis-a-vis seamless content. Enthusiastically build bleeding-edge alignments before exceptional ideas. Objectively fabricate go forward communities whereas alternative ROI.
									</div>
									<a href="blog-single.html" class="custom-btn hvr-bounce-to-bottom">Load More</a>
								</div><!-- /.content -->
							</div><!-- /.content-outer -->
						</div><!-- /.post-item -->
						<div class="post-item">
							<div class="post-thumb">
								<a href="blog-single.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/04.jpg" alt="Thumb"></a>
							</div>
							<div class="content-outer">
								<div class="content">
									<h3 class="title"><a href="#">Holisticly integrate premier markets.</a></h3>
									<div class="meta-post">
										<span class="date"><i class="fa fa-calendar"></i>Jan 03, 2016</span>
										<span class="border"></span>
										<a href="#" class="comment"><i class="fa fa-comment"></i>09 Comment</a>
										<span class="border"></span>
										<span class="like"><i class="fa fa-heart"></i> 26 likes</span>
									</div>
									<div class="excerpt">
										Rapidiously maintain intuitive process improvements through an expanded array of scenarios. Holisticly engineer customized partnerships vis-a-vis seamless content. Enthusiastically build bleeding-edge alignments before exceptional ideas. Objectively fabricate go forward communities whereas alternative ROI.
									</div>
									<a href="blog-single.html" class="custom-btn hvr-bounce-to-bottom">Load More</a>
								</div><!-- /.content -->
							</div><!-- /.content-outer -->
						</div><!-- /.post-item -->
						<div class="post-item">
							<div class="post-thumb">
								<a href="blog-single.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/05.jpg" alt="Thumb"></a>
							</div>
							<div class="content-outer">
								<div class="content">
									<h3 class="title"><a href="#">Holisticly integrate premier markets.</a></h3>
									<div class="meta-post">
										<span class="date"><i class="fa fa-calendar"></i>Jan 03, 2016</span>
										<span class="border"></span>
										<a href="#" class="comment"><i class="fa fa-comment"></i>09 Comment</a>
										<span class="border"></span>
										<span class="like"><i class="fa fa-heart"></i> 26 likes</span>
									</div>
									<div class="excerpt">
										Rapidiously maintain intuitive process improvements through an expanded array of scenarios. Holisticly engineer customized partnerships vis-a-vis seamless content. Enthusiastically build bleeding-edge alignments before exceptional ideas. Objectively fabricate go forward communities whereas alternative ROI.
									</div>
									<a href="blog-single.html" class="custom-btn hvr-bounce-to-bottom">Load More</a>
								</div><!-- /.content -->
							</div><!-- /.content-outer -->
						</div><!-- /.post-item -->
						<!-- start pagination -->
                        <div class="post-pagination-area">
                            <ul class="post-pagination">
                                <li><a>Prev</a></li>
                                <li><a href="#">1 </a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a>...</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                            <div class="post-pagination-number">
                            	<span>page 1 of 8</span>
                            </div>
                        </div><!-- /.post-pagination-area -->
					</div>
				</main>
				<!-- end main conent  -->


				<aside id="sidebar" class="col-md-4 page-sidebar">
					<div class="widget-area theiaStickySidebar">
						<div class="widget search">
	                        <form action="#">
	                            <input type="text" name="search" placeholder="Search">
	                            <span><i class="fa fa-search"></i></span>
	                        </form>
	                    </div><!-- /.widget -->

	                    <div class="widget catagory">
	                        <h3 class="widget-title">Catagories</h3>
	                        <div class="clearfix"></div>

	                        <ul class="catagory-list">
	                            <li><a href="#">Web Design </a><span>03</span></li>
	                            <li><a href="#">Graphics Design</a><span>07</span></li>
	                            <li><a href="#">E-Commerce</a><span>05</span></li>
	                            <li><a href="#">Flexh Animation</a><span>09</span></li>
	                            <li><a href="#">WordPress Theme</a><span>04</span></li>
	                            <li><a href="#">HTML5/CSS3</a><span>08</span></li>
	                            <li><a href="#">Coding</a><span>02</span></li>
	                        </ul>
	                    </div><!-- /.widget catagory -->

	                    <div class="widget widget-tab">
						<!-- Nav tabs -->
							<ul class="widget-nav-tabs widget-title" role="tablist">
								<li role="presentation" class="active"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li>
								<li role="presentation"><a href="#latest" aria-controls="latest" role="tab" data-toggle="tab">Latest</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="popular">
									<ul class="small-post-list">
										<li class="small-post-item">
											<div class="post-thumb">
												<a class="hover-effect" href="single-best-article.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/03.jpg" alt="thumbs"></a>
											</div><!-- /.post-thumb -->

											<div class="content">
												<h2 class="title">
													<a href="single-best-article.html">Seamlessly parallel task future-proof quality.</a>
												</h2>
												<div class="meta">
													<a href="#" class="cat">Cricket</a>
													<span>-</span>
													<span>Sep 16, 2015</span>
												</div><!-- /.meta -->
											</div><!-- /.content -->
										</li>

										<li class="small-post-item">
											<div class="post-thumb">
												<a class="hover-effect" href="single-best-article.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/02.jpg" alt="thumbs"></a>
											</div><!-- /.post-thumb -->

											<div class="content">
												<h2 class="title">
													<a href="single-best-article.html">Seamlessly parallel task future-proof quality.</a>
												</h2>
												<div class="meta">
													<a href="#" class="cat">Cricket</a>
													<span>-</span>
													<span>Sep 16, 2015</span>
												</div><!-- /.meta -->
											</div><!-- /.content -->
										</li>

										<li class="small-post-item">
											<div class="post-thumb">
												<a class="hover-effect" href="single-best-article.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/01.jpg" alt="thumbs"></a>
											</div><!-- /.post-thumb -->

											<div class="content">
												<h2 class="title">
													<a href="single-best-article.html">Seamlessly parallel task future-proof quality.</a>
												</h2>
												<div class="meta">
													<a href="#" class="cat">Cricket</a>
													<span>-</span>
													<span>Sep 16, 2015</span>
												</div><!-- /.meta -->
											</div><!-- /.content -->
										</li>

										<li class="small-post-item">
											<div class="post-thumb">
												<a class="hover-effect" href="single-best-article.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/02.jpg" alt="thumbs"></a>
											</div><!-- /.post-thumb -->

											<div class="content">
												<h2 class="title">
													<a href="single-best-article.html">Seamlessly parallel task future-proof quality.</a>
												</h2>
												<div class="meta">
													<a href="#" class="cat">Cricket</a>
													<span>-</span>
													<span>Sep 16, 2015</span>
												</div><!-- /.meta -->
											</div><!-- /.content -->
										</li>

										<li class="small-post-item">
											<div class="post-thumb">
												<a class="hover-effect" href="single-best-article.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/03.jpg" alt="thumbs"></a>
											</div><!-- /.post-thumb -->

											<div class="content">
												<h2 class="title">
													<a href="single-best-article.html">Seamlessly parallel task future-proof quality.</a>
												</h2>
												<div class="meta">
													<a href="#" class="cat">Cricket</a>
													<span>-</span>
													<span>Sep 16, 2015</span>
												</div><!-- /.meta -->
											</div><!-- /.content -->
										</li>
									</ul>
								</div>

								<div role="tabpanel" class="tab-pane" id="latest">
									<ul class="small-post-list">
										<li class="small-post-item">
											<div class="post-thumb">
												<a class="hover-effect" href="single-best-article.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/04.jpg" alt="thumbs"></a>
											</div><!-- /.post-thumb -->

											<div class="content">
												<h2 class="title">
													<a href="single-best-article.html">Seamlessly parallel task future-proof quality.</a>
												</h2>
												<div class="meta">
													<a href="#" class="cat">Cricket</a>
													<span>-</span>
													<span>Sep 16, 2015</span>
												</div><!-- /.meta -->
											</div><!-- /.content -->
										</li>

										<li class="small-post-item">
											<div class="post-thumb">
												<a class="hover-effect" href="single-best-article.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/02.jpg" alt="thumbs"></a>
											</div><!-- /.post-thumb -->

											<div class="content">
												<h2 class="title">
													<a href="single-best-article.html">Seamlessly parallel task future-proof quality.</a>
												</h2>
												<div class="meta">
													<a href="#" class="cat">Cricket</a>
													<span>-</span>
													<span>Sep 16, 2015</span>
												</div><!-- /.meta -->
											</div><!-- /.content -->
										</li>

										<li class="small-post-item">
											<div class="post-thumb">
												<a class="hover-effect" href="single-best-article.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/02.jpg" alt="thumbs"></a>
											</div><!-- /.post-thumb -->

											<div class="content">
												<h2 class="title">
													<a href="single-best-article.html">Seamlessly parallel task future-proof quality.</a>
												</h2>
												<div class="meta">
													<a href="#" class="cat">Cricket</a>
													<span>-</span>
													<span>Sep 16, 2015</span>
												</div><!-- /.meta -->
											</div><!-- /.content -->
										</li>

										<li class="small-post-item">
											<div class="post-thumb">
												<a class="hover-effect" href="single-best-article.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/04.jpg" alt="thumbs"></a>
											</div><!-- /.post-thumb -->

											<div class="content">
												<h2 class="title">
													<a href="single-best-article.html">Seamlessly parallel task future-proof quality.</a>
												</h2>
												<div class="meta">
													<a href="#" class="cat">Cricket</a>
													<span>-</span>
													<span>Sep 16, 2015</span>
												</div><!-- /.meta -->
											</div><!-- /.content -->
										</li>

										<li class="small-post-item">
											<div class="post-thumb">
												<a class="hover-effect" href="single-best-article.html"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/01.jpg" alt="thumbs"></a>
											</div><!-- /.post-thumb -->

											<div class="content">
												<h2 class="title">
													<a href="single-best-article.html">Seamlessly parallel task future-proof quality.</a>
												</h2>
												<div class="meta">
													<a href="#" class="cat">Cricket</a>
													<span>-</span>
													<span>Sep 16, 2015</span>
												</div><!-- /.meta -->
											</div><!-- /.content -->
										</li>
									</ul>
								</div>
							</div>
						</div><!-- /.widget widget-tab -->

	                    <div class="widget twitter-widget">
	                        <h3 class="widget-title">Twitter Widget</h3>
	                        <div class="clearfix"></div>
	                        <ul class="twitter-widget-area">
	                            <li class="twitter-widget-item">
	                                <div class="post-thumb">
	                                    <a href="#"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/1/01.jpg" alt="Thumb"></a>
	                                </div>
	                                <div class="content">
	                                    <p> <a href="#">Design Mart</a> @ Demart 08m</p>
	                                     <div class="excerpt">
	                                     Uniquely morph turnkey technology and flexible infomediary. Objective facilitate diverse scenarios.
	                                     </div>
	                                     <a href="#" class="twitter-link">http://trimanco.com/5e7ee</a>
	                                </div>
	                            </li>

	                            <li class="twitter-widget-item">
	                                <div class="post-thumb">
	                                    <a href="#"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/1/02.jpg" alt="Thumb"></a>
	                                </div>
	                                <div class="content">
	                                    <p> <a href="#">Samsung world</a> @ samsung_xray 20m</p>
	                                     <div class="excerpt">
	                                     Uniquely morph turnkey technology and flexible infomediary. Objective facilitate diverse scenarios.
	                                     </div>
	                                     <a href="#" class="twitter-link">http://trimanco.com/5e7ee</a>
	                                </div>
	                            </li>

	                            <li class="twitter-widget-item">
	                                <div class="post-thumb">
	                                    <a href="#"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/1/03.jpg" alt="Thumb"></a>
	                                </div>
	                                <div class="content">
	                                    <p> <a href="#">Foodi Mart</a> @ foodi 08m</p>
	                                     <div class="excerpt">
	                                     Uniquely morph turnkey technology and flexible infomediary. Objective facilitate diverse scenarios.
	                                     </div>
	                                     <a href="#" class="twitter-link">http://trimanco.com/5e7ee</a>
	                                </div>
	                            </li>

	                            <li class="twitter-widget-item">
	                                <div class="post-thumb">
	                                    <a href="#"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/blog/thumb/small/1/04.jpg" alt="Thumb"></a>
	                                </div>
	                                <div class="content">
	                                    <p> <a href="#">Design Mart</a> @ Demart 08m</p>
	                                     <div class="excerpt">
	                                     Uniquely morph turnkey technology and flexible infomediary. Objective facilitate diverse scenarios.
	                                     </div>
	                                     <a href="#" class="twitter-link">http://trimanco.com/5e7ee</a>
	                                </div>
	                            </li>
	                        </ul>
	                    </div><!-- /.widget twitter-widget -->

	                    <div class="widget tag-area">
	                        <h3 class="widget-title">Tags</h3>
	                        <div class="clearfix"></div>
	                        <ul class="tag">
	                            <li><a href="#">Design</a></li>
	                            <li><a href="#">HTML5</a></li>
	                            <li><a href="#">CSS3</a></li>
	                            <li><a href="#">Photoshop</a></li>
	                            <li><a href="#">Web Design</a></li>
	                            <li><a href="#">UI/UX</a></li>
	                            <li><a href="#">CSS3</a></li>
	                            <li><a href="#">Development</a></li>
	                            <li><a href="#">Design</a></li>
	                            <li><a href="#">Photoshop</a></li>
	                            <li><a href="#">Graphic</a></li>
	                            <li><a href="#">WordPress</a></li>
	                        </ul>
	                    </div><!-- /.widget tag-area -->
	                </div><!-- /.widget-area -->
				</aside>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<!--  end main content section  -->


	<!--  footer start   -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="row">
							<div class="f-widget">
								<a href="index.html" class="footer-logo"><img src="<?php echo  get_template_directory_uri() ?>/assets/images/footer-logo.png" alt="Logo"></a>
								<div class="excerpt">
									Professionally engineer competitive paradigms rather ethical strategic theme areas. Completely cultivate technically sound initiatives via  sound niche markets. Holisticly matrix opportunities without resource sucking best practices. 
								</div>
								<ul class="social-media">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-camera"></i></a></li>
									</ul>
							</div><!-- /.f-widget -->
						</div><!-- /.row -->
					</div><!-- /.col-md-4 -->

					<div class="col-md-4">
							<div class="f-widget">
								<h3 class="widget-title">Popular Post</h3>
								<ul class="small-post-list">
									<li class="small-post-item">
										<a href="#" class="post-thumb">
											<img src="<?php echo  get_template_directory_uri() ?>/assets/images/homepage1/footer/thumb/01.jpg" alt="thumb">
										</a>
										<span class="content">
											<a href="#" class="title">Monotonectally develop seamless e-business.</a>
											<span class="meta-post">
												<span class="date"><i class="fa fa-calendar"></i>Jan 03, 2016</span>
												<a href="#" class="comment"><i class="fa fa-comment"></i>09 Comment</a>
											</span>
										</span>
									</li>

									<li class="small-post-item">
										<a href="#" class="post-thumb">
											<img src="<?php echo  get_template_directory_uri() ?>/assets/images/homepage1/footer/thumb/02.jpg" alt="thumb">
										</a>
										<span class="content">
											<a href="#" class="title">Monotonectally develop seamless e-business.</a>
											<span class="meta-post">
												<span class="date"><i class="fa fa-calendar"></i>Jan 03, 2016</span>
												<a href="#" class="comment"><i class="fa fa-comment"></i>09 Comment</a>
											</span>
										</span>
									</li>

									<li class="small-post-item">
										<a href="#" class="post-thumb">
											<img src="<?php echo  get_template_directory_uri() ?>/assets/images/homepage1/footer/thumb/03.jpg" alt="thumb">
										</a>
										<span class="content">
											<a href="#" class="title">Monotonectally develop seamless e-business.</a>
											<span class="meta-post">
												<span class="date"><i class="fa fa-calendar"></i>Jan 03, 2016</span>
												<a href="#" class="comment"><i class="fa fa-comment"></i>09 Comment</a>
											</span>
										</span>
									</li>
								</ul>
							</div><!-- /.f-widget -->
					</div><!-- /.col-md-4 -->

					<div class="col-md-4">
						<div class="row">
							<div class="f-widget">
								<h3 class="widget-title">Tags</h3>
								<ul class="tag">
									<li><a href="#">Design</a></li>
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Web Design</a></li>
									<li><a href="#">WordPress</a></li>
									<li><a href="#">Photoshop</a></li>
									<li><a href="#">Illustrator</a></li>
									<li><a href="#">UI/UX</a></li>
									<li><a href="#">Photography</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">HTML5</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Photography</a></li>
								</ul>
							</div><!-- /.f-widget -->
						</div><!-- /.row -->
					</div><!-- /.col-md-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.footer-top -->
		<div class="footer-bottom">
			<p>Copyright &copy; 2016. Design and Development by <a href="#">CodexCoder</a></p>
		</div>
	</footer>
	<!--  footer end   -->
	
	<script type='text/javascript' src='<?php echo  get_template_directory_uri() ?>/assets/js/plugins.js'></script>
	<script type='text/javascript' src='<?php echo  get_template_directory_uri() ?>/assets/js/functions.js'></script>
	
</body>
</html>