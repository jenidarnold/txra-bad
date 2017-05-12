@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><i class="et-trophy"></i> ANNUAL AWARDS GALLERY</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Awards</a></li>
				<li class="active">Gallery</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

<!-- -->
	<section>
		<div class="container">

			<ul id="portfolio_filter" class="nav nav-pills margin-bottom-0">
				<li class="filter active"><a data-filter="*" href="#">All</a></li>
				<li class="filter"><a data-filter=".2017" href="#">2017</a></li>
				<li class="filter"><a data-filter=".2016" href="#">2016</a></li>
				<li class="filter"><a data-filter=".2015" href="#">2015</a></li>
				<li class="filter"><a data-filter=".2014" href="#">2014</a></li>
			</ul>
			<ul id="portfolio_filter" class="nav nav-pills margin-bottom-60">
				<li class="filter"><a data-filter=".sportsmanship" href="#">A.G. Sportsmanship</a></li>
				<li class="filter"><a data-filter=".contributor" href="#">Outstanding Contributor</a></li>
				<li class="filter"><a data-filter=".male" href="#">Male Athlete</a></li>
				<li class="filter"><a data-filter=".female" href="#">Female Athlete</a></li>
				<li class="filter"><a data-filter=".jrmale13-18" href="#">Jr. Male Athlete (13-18)</a></li>
				<li class="filter"><a data-filter=".jrfemale13-18" href="#">Jr. Female Athlete (13-18)</a></li>
				<li class="filter"><a data-filter=".jrmaleunder13" href="#">Jr. Male Athlete (Under 13)</a></li>
				<li class="filter"><a data-filter=".jrfemaleunder13" href="#">Jr. Female Athlete (Under 13)</a></li>
			</ul>

		</div>
		<div class="container">

			<!--
				fullwidth - required for full width portfolio
			-->
			<div id="portfolio" class="clearfix fullwidth portfolio-nogutter portfolio-isotope portfolio-isotope-4">
				
				<!-- 2017 -->
				<div class="portfolio-item 2017 contributor"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/bob_sullins.jpg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/bob_sullins.jpg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Bob Sullins</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Outstanding Contributor</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2017 sportsmanship"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/ross_smith.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/ross_smith.png')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Ross Smith</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Ann Gibbons Sportsmanship</a></li>
							</ul>
						</div>

					</div>
				</div>
				<div class="portfolio-item 2017 male"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/male.jpg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/male.jpg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Richard (Ice) Eisemann</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Male Athlete</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2017 female"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/female.jpg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/female.jpg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Julienne Arnold</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Female Athlete</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2017 jrmale13-18"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/brady_yelverton.jpg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/brady_yelverton.jpg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Brady Yelverton</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Jr. Male Athlete (13-18)</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2017 jrfemale13-18"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/shane_diaz.jpg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/shane_diaz.jpg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Shane Diaz</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Jr. Female Athlete (13-18)</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2017 jrmaleunder13"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/gael_trejo.jpeg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/gael_trejo.jpeg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Gael Trejo</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Jr. Male Athlete (Under 13)</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2017 jrfemaleunder13"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/leah_trejo.jpeg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/leah_trejo.jpeg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Leah Trejo</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Jr. Female Athlete (Under 13)</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

			<!-- /2017 -->


			<!-- 2016 -->



			<!-- /2016 -->


			<!-- 2015 -->



			<!-- /2015 -->
			</div>
		</div>		
	</section>
	<!-- / -->
@stop