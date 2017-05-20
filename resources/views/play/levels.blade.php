@extends('layouts.app')
@section('style')
	<style>
	 li {
	 	height: 80px;
	 }
	 .pricing-title {
	 	height: 75px !important;
	 }
	</style>

@stop
@section('content')		

<div class="container">

  <!--  Reference http://bestracquetball.com/divisions-or-levels/  -->

	<div class="row mega-price-table margin-bottom-60">
		<p class="text-muted"> a breakdown of the difference in skill level.</p>
		
		<div class="col-md-2 col-sm-6 hidden-sm hidden-xs pricing-desc">

			<div class="pricing-title">
				<h3>Skill Levels</h3>			
			</div>

			<ul class="list-unstyled">
				<li>Knowledge of Rules</li>
				<li class="alternate">Time on Court</li>
				<li>Forehand/Backhand</li>
				<li class="alternate">Accuracy of Shot</li>
				<li>Shot/Serve Selection</li>
				<li class="alternate">Anticipation of Shots</li>
				<li>Game Strategy</li>
				<li class="alternate">Court Positioning</li>
				<li>Leagues/Tournaments</li>
			</ul>

		</div>

		<div class ="col-md-10 col-sm-6">
			<div class="owl-carousel owl-padding-1 nomargin buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items": "3", "autoPlay": 5000, "navigation": true, "pagination": false}'>

				<!-- item -->
				<div class="item-box">
					<div class="block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>Novice</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>
									Zero knowledge of the rules of the game.
								</li>
								<li class="alternate">
									Just started playing the game.
								</li>
								<li>
									Subpar forehand. No backhand at all.
								</li>
								<li class="alternate">
									Extremely inaccurate! “Heads up!”
								</li>
								<li>
									“Grip it & rip it”. Just hits the ball with no remorse!
								</li>
								<li class="alternate">
									Has no clue where the ball is going, how it got there, or what their opponent is thinking. 
								</li>
								<li>
									Zero strategy involved in their game.
								</li>
								<li class="alternate">
									All over the place. Chasing the ball.
								</li>
								<li>
									No league or tournaments yet.
								</li>
							</ul>

							<!-- /option list -->
							<!-- button -->
								<a href="#" class="btn btn-primary fullwidth">Read More</a>		
						</div>
					</div>				
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class=" block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>D</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>

								</li>
								<li class="alternate">
								</li>
								<li>

								</li>
								<li class="alternate">
								
								</li>
								<li>

								</li>
								<li class="alternate">

								</li>
								<li>
									
								</li>
								<li class="alternate">
									
								</li>
								<li>
									
								</li>
							</ul>
							<!-- /option list -->

							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class="block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>C</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>

								</li>
								<li class="alternate">
								</li>
								<li>

								</li>
								<li class="alternate">
								
								</li>
								<li>

								</li>
								<li class="alternate">

								</li>
								<li>
									
								</li>
								<li class="alternate">
									
								</li>
								<li>
									
								</li>
							</ul>
							<!-- /option list -->


							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class=" block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>B</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>

								</li>
								<li class="alternate">
								</li>
								<li>

								</li>
								<li class="alternate">
								
								</li>
								<li>

								</li>
								<li class="alternate">

								</li>
								<li>
									
								</li>
								<li class="alternate">
									
								</li>
								<li>
									
								</li>
							</ul>
							<!-- /option list -->


							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class="block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>A</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>

								</li>
								<li class="alternate">
								</li>
								<li>

								</li>
								<li class="alternate">
								
								</li>
								<li>

								</li>
								<li class="alternate">

								</li>
								<li>
									
								</li>
								<li class="alternate">
									
								</li>
								<li>
									
								</li>
							</ul>
							<!-- /option list -->

							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>					
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class="block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>Elite</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>

								</li>
								<li class="alternate">
								</li>
								<li>

								</li>
								<li class="alternate">
								
								</li>
								<li>

								</li>
								<li class="alternate">

								</li>
								<li>
									
								</li>
								<li class="alternate">
									
								</li>
								<li>
									
								</li>
							</ul>
							<!-- /option list -->

							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>					
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class="block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>Open</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>

								</li>
								<li class="alternate">
								</li>
								<li>

								</li>
								<li class="alternate">
								
								</li>
								<li>

								</li>
								<li class="alternate">

								</li>
								<li>
									
								</li>
								<li class="alternate">
									
								</li>
								<li>
									
								</li>
							</ul>
							<!-- /option list -->


							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>					
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class="block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>Pro</h3>
							</div>

						<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>

								</li>
								<li class="alternate">
								</li>
								<li>

								</li>
								<li class="alternate">
								
								</li>
								<li>

								</li>
								<li class="alternate">

								</li>
								<li>
									
								</li>
								<li class="alternate">
									
								</li>
								<li>
									
								</li>
							</ul>
							<!-- /option list -->


							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>					
					</div>
				</div>
				<!-- /item -->
			</div>
		</div>	
	</div>
</div>


@stop