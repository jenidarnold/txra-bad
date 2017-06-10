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
			<!--div id="header" class="dark header-md transparent clearfix" -->
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

						</ul>
						<!-- /BUTTONS -->

						<!-- Logo
						<a class="logo pull-left" href="index.html">
							<img src="{{ asset('images/TX.png')}}" style="height:30px;display:inline; opacity:.4" alt="" />
							<img src="{{ asset('images/R.png')}}" style="height:30px;display:inline; opacity:.4" alt="" />
							<img src="{{ asset('images/A.png')}}" style="height:30px;display:inline; opacity:.4" alt="" />
						</a>
						-->
						<a href="/"><img src="{{ asset('images/logo_2017.png')}}" style="height:100px;display:inline;" alt="" /></a>

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
													<li><a href="{{ route('play.levels')}}">SKILL LEVELS</a></li>
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
													<li><a href="{{ route('play.instructors')}}">INSTRUCTORS</a></li>
													<li><a href="page-services-2.html">CLINICS</a></li>
												</ul>
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
													JUNIOR PROGRAMS
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="#">LOCAL PROGRAMS</a>
													</li>
													<li>
														<a href="/juniorteam">TX JUNIOR RACQUETBALL TEAM</a>
													</li>	
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown" href="{{ route('referee.index')}}">
													REFEREE CERTIFICATION
												</a>
											</li>
											<li class="dropdown">
												<a href="{{ route('programs.instructors')}}">
													TEXAS INSTRUCTOR PROGRAM
												</a>
											</li>
											<li class="dropdown" style="display:none">
												<a class="dropdown-toggle" href="#">
													AMBASSADOR PROGRAM
												</a>
											</li>
											<li class="dropdown" style="display:none">
												<a class="dropdown-toggle" href="#">
													SCHOLARSHIPS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													ANNUAL AWARDS
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="{{route('awards.index')}}">Gallery</a>
													</li>
													<li>
														<a href="{{route('awards.nominate')}}">Nominate</a>
													</li>													
												</ul>
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- MEMBERS -->
										<a class="dropdown-toggle" href="#">
											MEMBERS
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a href="{{route('members.listing')}}">PROFILES</a>
											</li>
											<li class="dropdown">
												<a class="dropdown" href="{{route('members.rankings')}}">
													RANKINGS
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
												<a class="dropdown" href="{{ route('events.index', array('type' =>'live'))}}">
													LIVE EVENTS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown" href="{{ route('events.index', array('type' =>'future'))}}">
													UPCOMING EVENTS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown" href="{{ route('events.index', array('type' =>'recent'))}}">
													RECENT EVENTS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown" href="{{ route('events.index', array('type' =>'past'))}}">
													ARCHIVED EVENTS
												</a>
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- EVENTS -->
										<a class="dropdown" href="/news">
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
													LEADERSHIP
												</a>
												<ul class="dropdown-menu">
													<li><a href="{{ route('board.index')}}">THE BOARD OF DIRECTORS</a></li>
													<li><a href="{{ route('committees.index')}}" >COMMITTEES</a></li>
													<li><a href="{{ route('election.index')}}" >ELECTION PROCEDURE</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													MISSION & VALUES
												</a>
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
												<a class="dropdown-toggle" href="/about/bylaws">
													BY LAWS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown" href="{{route('contact')}}">
													CONTACT US
												</a>												
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- DONATE -->
										<a class="dropdown" href="/donate">
											DONATIONS
										</a>
									</li>

									<!-- USER OPTIONS -->
									@if( Auth::guest())
									<li class="dropdown">
										<a class="dropdown" href="/login">
											<span class="btn btn-sm btn-primary">LOGIN</span>
										</a>								
									<li class="dropdown">
										<a class="dropdown" href="/register">
											<span class="btn btn-sm btn-default">REGISTER</span>
										</a>
									</li>
									@else
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											<img class="user-avatar" alt="{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}" src="{{ asset('images/members/'. Auth::user()->id .'/profile.png') }}" height="34" />
										</a>
										<ul class="dropdown-menu hold-on-click">
											<li><!-- my calendar -->
												<a href="calendar.html"><i class="fa fa-calendar"></i> Calendar</a>
											</li>
											<li><!-- my inbox -->
												<a href="#"><i class="fa fa-envelope"></i> Inbox
													<span class="pull-right label label-default">0</span>
												</a>
											</li>
											<li><!-- settings -->
												<a href="{{ route('members.edit', array('id' =>  Auth::user()->id))}}"><i class="fa fa-cogs"></i> Settings</a>
											</li>

											<li class="divider"></li>
											<li><!-- logout -->
												<a href="{{ url('/logout') }}"><i class="fa fa-power-off"></i> Log Out</a>
											</li>
										</ul>	
									</li>						
									@endif							
									<!-- /USER OPTIONS -->
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
		<script type="text/javascript">var plugin_path = '/plugins/';</script>
		<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-2.2.3.min.js') }}"></script>

		<!-- LAYER SLIDER -->
		<script type="text/javascript" src="{{ asset('plugins/slider.layerslider/js/layerslider_pack.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/view/demo.layerslider_slider.js') }}"></script>

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="{{asset('plugins/slider.revolution/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('plugins/slider.revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/view/demo.revolution_slider.js')}}"></script>

		<!-- SCRIPTS -->
		<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-61761895-4', 'auto');
		  ga('send', 'pageview');
		</script>
</body>
</html>