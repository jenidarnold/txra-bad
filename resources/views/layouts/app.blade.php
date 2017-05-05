<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Texas Racquetball Association</title>
		<meta name="keywords" content="Texas, racquetball, sport, racquet" />
		<meta name="description" content="" />
		<meta name="Author" content="Julienne Arnold" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

		<!-- LAYER SLIDER -->
		<link href="{{ asset('plugins/slider.layerslider/css/layerslider.css') }}" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="{{ asset('css/essentials.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="{{ asset('css/header-1.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/color_scheme/green.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>
	<style>
		.content {
			padding-top: 100px;
		}
	</style>
@yield('style')

	<body class="smoothscroll enable-animation grain-grey">

		<!-- SLIDE TOP -->
		<div id="slidetop">

			<div class="container">

				<div class="row">

					<div class="col-md-4">
						<h6><i class="icon-heart"></i> WHY RACQUETBALL?</h6>
						<p>"Not only is racquetball a blast to play, but also the sport offers a great deal of physical and mental health benefits. Racquetball is a cinch to learn, and there is a minimal amount of game equipment to buy. The game is fast-paced, so it offers an impressive workout for your entire body in a short amount of time. Racquetball isnt a game for slackers, but you will be having so much fun you wont even notice how much energy you are exerting." <a href="http://woman.thenest.com/benefits-playing-racquetball-13166.html"> Read More</a></p>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-attachment"></i> RECENTLY VISITED</h6>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
						</ul>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-envelope"></i> CONTACT INFO</h6>
						<ul class="list-unstyled">
							<li><b>Address:</b> PO Box 21132, Here Weare St, <br />Dallas, Texas 75007 USA</li>
							<li><b>Phone:</b> 1-800-888-TXRA</li>
							<li><b>Email:</b> <a href="mailto:support@txra.org">support@txra.org</a></li>
						</ul>
					</div>
				</div>
			</div>

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->

			<!-- wrapper -->
		<div id="wrapper">

			<!--
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom

				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="dark transparent clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form action="page-search-result-1.html" method="get">
										<div class="input-group">
											<input type="text" name="src" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
										</div>
									</form>
								</div>
							</li>
							<!-- /SEARCH -->

							<!-- QUICK SHOP CART -->
							<li class="quick-cart">
								<a href="#">
									<span class="badge badge-aqua btn-xs badge-corner">2</span>
									<i class="fa fa-shopping-cart"></i>
								</a>
								<div class="quick-cart-box">
									<h4>Shop Cart</h4>

									<div class="quick-cart-wrapper">

										<a href="#"><!-- cart item -->
											<img src="{{ asset('images/demo/people/300x300/4-min.jpg') }}"  width="45" height="45" alt="" />
											<h6><span>2x</span> TXRA T-Shirt</h6>
											<small>$37.21</small>
										</a><!-- /cart item -->

										<a href="#"><!-- cart item -->
											<img src="{{ asset('images/demo/people/300x300/5-min.jpg') }}" width="45" height="45" alt="" />
											<h6><span>2x</span> TRXRA Mug</h6>
											<small>$17.18</small>
										</a><!-- /cart item -->

										<!-- cart no items example -->
										<!--
										<a class="text-center" href="#">
											<h6>0 ITEMS ON YOUR CART</h6>
										</a>
										-->

									</div>

									<!-- quick cart footer -->
									<div class="quick-cart-footer clearfix">
										<a href="shop-cart.html" class="btn btn-primary btn-xs pull-right">VIEW CART</a>
										<span class="pull-left"><strong>TOTAL:</strong> $54.39</span>
									</div>
									<!-- /quick cart footer -->

								</div>
							</li>
							<!-- /QUICK SHOP CART -->

						</ul>
						<!-- /BUTTONS -->

						<!-- Logo -->
						<a class="logo pull-left" href="index.html">
							<img src="{{ asset('images/TX.png')}}" style="height:30px;display:inline; opacity:.4" alt="" />
							<img src="{{ asset('images/R.png')}}" style="height:30px;display:inline; opacity:.4" alt="" />
							<img src="{{ asset('images/A.png')}}" style="height:30px;display:inline; opacity:.4" alt="" />
						</a>

						<!--
							Top Nav

							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!--
									NOTE

									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example:

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown active"><!-- HOME -->
										<a class="dropdown-toggle" href="#">
											HOME
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													LOGIN
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													REGISTER
												</a>
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- PLAY -->
										<a class="dropdown-toggle" href="#">
											PLAY
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOW TO PLAY
												</a>
												<ul class="dropdown-menu">
													<li><a href="{{ route('play.basics')}}">THE BASICS</a></li>
													<li><a href="{{ route('play.rules')}}">THE RULES</a></li>
													<li><a href="{{ route('play.tips')}}">TIPS</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													WHERE TO PLAY
												</a>
												<ul class="dropdown-menu">
													<li><a href="recreational">RECREATIONAL</a></li>
													<li><a href="leagues">LEAGUES</a></li>
													<li><a href="tournaments">TOURNAMENTS</a></li>
												</ul>
											</li>

											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													IMPROVE YOUR GAME
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-services-1.html">INSTRUCTORS</a></li>
													<li><a href="page-services-2.html">CLINICS</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													TIPS
												</a>
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- PROGRAMS -->
										<a class="dropdown-toggle" href="#">
											PROGRAMS
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													JUNIORS PROGRAM
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="#">ABOUT THE KIDS</a>
													</li>
													<li>
														<a href="#">THE COACH</a>
													</li>
													<li>
														<a href="#">JOIN THE TEAM</a>
													</li><li>
														<a href="#">NEW & EVENTS</a>
													</li>
													<li>
														<a href="#">DONATE</a>
													</li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													REFEREE CERTIFICATION
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													INSTRUCTORS PROGRAM
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													AMBASSADOR PROGRAM
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													SCHOLARSHIPS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													ANNUAL AWARDS
												</a>
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- MEMBERS -->
										<a class="dropdown-toggle" href="#">
											MEMBERS
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													PROFILES
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													RANKINGS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HEAD TO HEAD
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													MEMBERSHIP
												</a>
												<ul class="dropdown-menu">
													<li><a href="portfolio-single-parallax.html">MEMBER BENEFITS</a></li>
													<li><a href="portfolio-single-parallax.html">FREE eMembership</a></li>
													<li><a href="portfolio-single-extended.html">COMPETITVE MEMBERSHIP</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- EVENTS -->
										<a class="dropdown-toggle" href="#">
											EVENTS
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													LIVE EVENTS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													UPCOMING EVENTS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													RECENT EVENTS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													ARCHIVED EVENTS
												</a>
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- EVENTS -->
										<a class="dropdown-toggle" href="#">
											NEWS
										</a>
									</li>
									<li class="dropdown"><!-- ABOUT -->
										<a class="dropdown-toggle" href="#">
											ABOUT
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													IN THE COMMUNITY
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													LEADERSHIP
												</a>
												<ul class="dropdown-menu">
													<li><a href="portfolio-single-extended.html">THE BOARD OF DIRECTORS & OFFICERS</a></li>
													<li><a href="portfolio-single-parallax.html">COMMITTEES</a></li>
													<li><a href="portfolio-single-parallax.html">ELECTION PROCEDURE</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													MISSION & VALUES
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													NEWS
												</a>
												<ul class="dropdown-menu">
													<li><a href="blog-smallimg-aside-left.html">LEFT SIDEBAR</a></li>													
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													FINANCIALS
												</a>
												<ul class="dropdown-menu">
													<li><a href="blog-single-default.html">DEFAULT</a></li>													
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													BY LAWS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													CONTACT US
												</a>
												<ul class="dropdown-menu">
													<li><a href="blog-single-default.html">FEEDBACK</a></li>
													<li><a href="blog-single-aside-left.html">TAKE OUR SURVEY</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- DONATE -->
										<a class="dropdown-toggle" href="#">
											DONATE
										</a>
										<ul class="dropdown-menu pull-right">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													JUNIORS PROGRAM DONATION
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													COLLEGE SCHOLARSHIP DONATION
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													AmazonSmile
												</a>
											</li><li class="dropdown">
												<a class="dropdown-toggle" href="#">
													GOOD NEIGHBOR PROGRAM
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													DONATE NOW
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													DONORS
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->
			</div>
		<div class='content'>
			@yield('content')
		</div>
		<!-- FOOTER -->
		@include('includes.footer')    	
		<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'plugins/';</script>
		<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-2.2.3.min.js') }}"></script>

		<!-- LAYER SLIDER -->
		<script type="text/javascript" src="{{ asset('plugins/slider.layerslider/js/layerslider_pack.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/view/demo.layerslider_slider.js') }}"></script>


		<!-- SCRIPTS -->
		<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
