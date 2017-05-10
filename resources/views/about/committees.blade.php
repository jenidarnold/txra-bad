@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs dark">
		<div class="container">

			<h1>COMMITTEES</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Pages</a></li>
				<li class="active">Committees</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		<div class="container">

			<p class="lead">TXRA functions because of participation by its members. Members like you! Interested in serving on a standing committee? <a href="#signup">Sign up today</a>.</p>
			
			<div class="divider divider-center divider-color"><!-- divider -->
				<i class="fa fa-chevron-down"></i>
			</div>

			<!-- FEATURED BOXES 3 -->
			<div class="row">
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover et-streetsign"></i>
						<h4>Marketing</h4>
						<p class="font-lato size-20">Donec id elit non mi porta gravida.</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover et-piechart"></i>
						<h4>Membership & Recruitment</h4>
						<p class="font-lato size-20">Donec id elit non mi porta gravida.</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover et-circle-compass"></i>
						<h4>Women & Juniors Program</h4>
						<p class="font-lato size-20">Donec id elit non mi porta gravida.</p>
					</div>
				</div>
				
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover et-strategy"></i>
						<h4>Fundraising</h4>
						<p class="font-lato size-20">Donec id elit non mi porta gravida.</p>
					</div>
				</div>				
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover et-trophy"></i>
						<h4>Awards</h4>
						<p class="font-lato size-20">Donec id elit non mi porta gravida.</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover et-tools"></i>
						<h4>Elections</h4>
						<p class="font-lato size-20">Donec id elit non mi porta gravida.</p>
					</div>
				</div>

			</div>
			<!-- /FEATURED BOXES 3 -->

		</div>

		<div class="container">
				<div class="divider divider-center divider-color"><!-- divider -->
					<i class="fa fa-chevron-down"></i>
				</div>
				<a name="signup"></a>
				<div class="row">

					<!-- LOGIN -->
					<div class="col-md-8 col-sm-8">
						
						<!-- register form -->
						<form class="nomargin sky-form boxed" action="#" method="post">
							<header>
								<i class="fa fa-users"></i> Sign Up
								</header>

							<fieldset class="nomargin">	
								<div class="row margin-bottom-10">
									<div class="col-md-6">
										<label class="input">
											<input type="text" placeholder="First name">
										</label>
									</div>
									<div class="col col-md-6">
										<label class="input">
											<input type="text" placeholder="Last name">
										</label>
									</div>
								</div>

								<div class="row margin-bottom-10">
									<div class="col-md-6">
										<label class="input margin-bottom-10">
											<i class="ico-append fa fa-envelope"></i>
											<input type="text" placeholder="Email address">
											<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
										</label>								
									</div>
									<div class="col col-md-6">
										<label class="select margin-bottom-10">
											<select>
												<option value="0" selected disabled>Are you a current TXRA Member?</option>
												<option value="1">Yes</option>
												<option value="2">No</option>
											</select>
											<i></i>
										</label>
									</div>
								</div>
								<br/>
								<h5>Check the Committee(s) you are interested in:</h5>
								<div class="margin-top-30">
									<label class="checkbox nomargin"><input class="checked-agree" type="checkbox" name="checkbox"><i></i>Juniors Program</label>
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Fundraising</label>
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Marketing</label>
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Awards</label>
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Membership</label>
								</div>
							</fieldset>

							<div class="row margin-bottom-20">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
								</div>
							</div>

						</form>
						<!-- /register form -->

					</div>
					<!-- /LOGIN -->

				
				</div>

				
			</div>
		</section>
		<!-- / -->

@stop