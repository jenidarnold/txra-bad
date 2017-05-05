@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')
<section>
	<div class="container">

		<div class="row">

			<!-- LEFT -->
			<div class="col-md-9">

				<img class="pull-left" src="{{ asset('images/play/court.jpg')}}" alt="" />

				<div class="heading-title">
					<h2>HOW  TO PLAY RACQUETBALL</h2>
				</div>

				<p>Racquetball is easy and fun to play, although it may take a few games to figure out the basics such as scoring, serving and some simple rules. Racquetball can be played indoors and outdoors, but most Texas courts can be found indoors at private/public health clubs, and all sorts of local recreation centers. The game can be played as 'singles', between two players, or 'doubles' between two teams of two players each. There is also a game, 'cut-throat' which involves three players. Each player has his/her own racquet and one ball is used.
				</p>
				<p>Matches are typically two games to 15 points and a tie-breaker to 11 points if needed. For the basics let's get started with a few so you can enjoy your racquetball experience. The serve-Play begins with the server standing in the Service Zone and serving the ball to his/her opponent(s) who is standing in the Receiving Zone. To serve, the server must first bounce the ball and then strike it with the racquet.
				</p>

				<div class="row margin-top-60">

					<div class="col-sm-6">
						<div class="heading-title heading-border-bottom heading-color">
							<h3>Racquetball Equipment</h3>
						</div>

						<p>To play a game of racquetball you only need a few things to get started. Most racquetball equipment and accessories can be purchased seperately or starter kits can be purchased for about $30.
							<ul>
								<li>Racquet (Cost anywhere from $20-$200, depends on budget, and willingness to pay for feel and technology.) </li>
								<li>Eyewear (Recommended and important, helps reduce the risk of injury if you are hit in the eye.)</li>
								<li>Ball (Balls come in different colors such as blue, green, lavender and black. Any color will do.) </li>
								<li>Glove. (Optional, this will help you keep a firm grip on the racquet during those fast rallies.)</li>
								<li>Shoes (Any type of indoor court or tennis shoe, there are shoes designed specifically for racquetball.)</li>
							</ul>
						</p>
					</div>

					<div class="col-sm-6">
						<div class="heading-title heading-border-bottom heading-color">
							<h3>Fitness Facts</h3>
						</div>
						<p></p>
					</div>

				</div>


				<div class="margin-top-60">

					<div class="heading-title heading-border-bottom heading-color text-center">
						<h3>Why  Play Racquetball?</h3>
					</div>
					<p></p>

					<div class="row">
						<div class="col-sm-4">
							<ul class="list-unstyled list-icons">
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /LEFT -->

			<!-- RIGHT -->
			<div class="col-md-3">

				<div class="box-static box-border-top margin-bottom-60">
					<div class="box-title">
						<h4>Additional Info</h4>
					</div>
					<ul class="list-unstyled list-icons padding-15 nopadding-bottom">
						<li class="margin-bottom-20">
							<i class="fa fa-check text-success size-18"></i>
							<span class="block bold size-18">Digital Magazine</span>
							<small>lorem ipsum dolor sit amet</small>
						</li>					
					</ul>

					<hr />
				</div>

				<hr />


				<!-- SOCIAL ICONS -->
				<div class="hidden-xs text-center">
					<a href="#" class="social-icon social-icon-border social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="#" class="social-icon social-icon-border social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="#" class="social-icon social-icon-border social-gplus" data-toggle="tooltip" data-placement="top" title="Google plus">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
					</a>

					<a href="#" class="social-icon social-icon-border social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
						<i class="icon-linkedin"></i>
						<i class="icon-linkedin"></i>
					</a>
				</div>
			</div>
			<!-- /RIGHT -->

		</div>

	</div>
</section>
<!-- / -->
@stop