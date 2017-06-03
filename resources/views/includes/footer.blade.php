<footer id="footer">
	<div class="container">

		<div class="row">

			<div class="col-md-3">
				<!-- Footer Logo 
				<img src="{{ asset('images/TX.png')}}" style="height:30px;display:inline; opacity:.7" alt="" />
				<img src="{{ asset('images/R.png')}}" style="height:30px;display:inline; opacity:.7" alt="" />
				<img src="{{ asset('images/A.png')}}" style="height:30px;display:inline; opacity:.7" alt="" />
				-->
				<img src="{{ asset('images/logo_2017.png')}}" style="height:100px;display:inline; opacity:.7" alt="" />

				<!-- Small Description -->
				<!--p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p-->

				<!-- Contact Address -->
				<address>
					<ul class="list-unstyled">
						<li class="footer-sprite address">
							PO Box 21132<br>
							Here Weare St, Texas<br>
							75007 USA<br>
						</li>
						<li class="footer-sprite phone">
							Phone: 1-800-565-2390
						</li>
						<li class="footer-sprite email">
							<a href="mailto:support@txra.org">support@txra.org</a>
						</li>
					</ul>
				</address>
				<!-- /Contact Address -->

			</div>

			<div class="col-md-4">

				<!-- Latest Blog Post -->
				<h4 class="letter-spacing-1">LATEST NEWS</h4>
				<ul class="footer-posts list-unstyled">
					<li>
						<a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
						<small>29 June 2015</small>
					</li>
					<li>
						<a href="#">Nullam id dolor id nibh ultricies</a>
						<small>29 June 2015</small>
					</li>
					<li>
						<a href="#">Duis mollis, est non commodo luctus</a>
						<small>29 June 2015</small>
					</li>
				</ul>
				<!-- /Latest Blog Post -->

			</div>
			<div class="col-md-5">

				<!-- Newsletter Form -->
				<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
				<p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

				<form class="validate" action="{{ url('subscribe')}} " method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="subscription_id"  value="1">
						<span class="input-group-btn">
							<button class="btn btn-success" type="submit">Subscribe</button>
						</span>
					</div>
				</form>
				<!-- /Newsletter Form -->

				<!-- Social Icons -->
				<div class="margin-top-20">
					<a href="https://www.facebook.com/TXRA-Texas-Racquetball-Association-187625447927010/" target="new" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
					</a>

					<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Instagram">
						<i class="icon-instagram"></i>
						<i class="icon-instagram"></i>
					</a>

				</div>
				<!-- /Social Icons -->
			</div>

		</div>

	</div>

	<div class="copyright">
		<div class="container">
			<ul class="pull-right nomargin list-inline mobile-block">
				<li><a href="{{ url('/terms-of-use')}}">Terms &amp; Conditions</a></li>
				<li>&bull;</li>
				<li><a href="#">Privacy</a></li>
			</ul>
			&copy; All Rights Reserved, TXRA.ORG
		</div>
	</div>
</footer>