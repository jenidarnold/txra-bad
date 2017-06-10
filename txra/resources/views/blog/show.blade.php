@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')

<section class="page-header page-header-xs">
	<div class="container">

		<!-- breadcrumbs -->
		<ol class="breadcrumb breadcrumb-inverse">
			<li><a href="/welcome">HOME</a></li>
			<li><a href="{{ route('members.listing')}} ">NEWS</a></li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->


	<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<!-- LEFT -->
						<div class="col-md-9 col-sm-9">

							<h1 class="blog-post-title">BLOG POST TITLE HERE</h1>
							<ul class="blog-post-info list-inline">
								<li>
									<a href="#">
										<i class="fa fa-clock-o"></i> 
										<span class="font-lato">June 29, 2015</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-comment-o"></i> 
										<span class="font-lato">28 Comments</span>
									</a>
								</li>
								<li>
									<i class="fa fa-folder-open-o"></i> 

									<a class="category" href="#">
										<span class="font-lato">Design</span>
									</a>
									<a class="category" href="#">
										<span class="font-lato">Photography</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-user"></i> 
										<span class="font-lato">John Doe</span>
									</a>
								</li>
							</ul>

							<!-- OWL SLIDER -->
							<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoPlay": 4500, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
								<a class="lightbox" href="assets/images/demo/1200x800/10-min.jpg" data-plugin-options='{"type":"image"}'>
									<img class="img-responsive" src="assets/images/demo/content_slider/10-min.jpg" alt="" />
								</a>
								<a class="lightbox" href="assets/images/demo/1200x800/3-min.jpg" data-plugin-options='{"type":"image"}'>
									<img class="img-responsive" src="assets/images/demo/content_slider/3-min.jpg" alt="" />
								</a>
								<a class="lightbox" href="assets/images/demo/1200x800/21-min.jpg" data-plugin-options='{"type":"image"}'>
									<img class="img-responsive" src="assets/images/demo/content_slider/21-min.jpg" alt="" />
								</a>
							</div>
							<!-- /OWL SLIDER -->

							<!-- IMAGE -->
							<!--
							<figure class="margin-bottom-20">
								<img class="img-responsive" src="assets/images/demo/content_slider/10-min.jpg" alt="img" />
							</figure>
							-->
							<!-- /IMAGE -->

							<!-- VIDEO -->
							<!--
							<div class="margin-bottom-20 embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="http://player.vimeo.com/video/8408210" width="800" height="450"></iframe>
							</div>
							-->
							<!-- /VIDEO -->


							<!-- article content -->
							<p class="dropcap">Aliquam fringilla, sapien eget scelerisque placerat, lorem libero cursus lorem, sed sodales lorem libero eu sapien. Nunc mattis feugiat justo vel faucibus. Nulla consequat feugiat malesuada. Ut justo nulla, <strong>facilisis vel molestie id</strong>, dictum ut arcu. Nunc ipsum nulla, eleifend non blandit quis, luctus quis orci. Cras blandit turpis mattis nulla ultrices interdum. Mauris pretium pretium dictum. Nunc commodo, felis sed dictum bibendum, risus justo iaculis dui, nec euismod orci sem eget neque. Donec in metus metus, vitae eleifend lorem. Ut vestibulum gravida venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque suscipit tincidunt magna non mollis. Fusce tempus tincidunt nisi, in luctus elit pellentesque quis. Sed velit mi, ullamcorper ut tempor ut, mattis eu lacus. Morbi rhoncus aliquet tellus, id accumsan enim sollicitudin vitae.</p>
							<p>Vivamus <a href="#">magna justo</a>, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt.</p>
							
							<!-- BLOCKQUOTE -->
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
								<cite>Source Title</cite>
							</blockquote>

							<p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
							<p>Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<!-- /article content -->


							<div class="divider divider-dotted"><!-- divider --></div>


							<!-- TAGS -->
							<a class="tag" href="#">
								<span class="txt">RESPONSIVE</span>
								<span class="num">12</span>
							</a>
							<a class="tag" href="#">
								<span class="txt">CSS</span>
								<span class="num">3</span>
							</a>
							<a class="tag" href="#">
								<span class="txt">HTML</span>
								<span class="num">1</span>
							</a>
							<a class="tag" href="#">
								<span class="txt">JAVASCRIPT</span>
								<span class="num">28</span>
							</a>
							<a class="tag" href="#">
								<span class="txt">DESIGN</span>
								<span class="num">6</span>
							</a>
							<a class="tag" href="#">
								<span class="txt">DEVELOPMENT</span>
								<span class="num">3</span>
							</a>
							<!-- /TAGS -->



							<!-- SHARE POST -->
							<div class="clearfix margin-top-30">

								<span class="pull-left margin-top-6 bold hidden-xs">
									Share Post: 
								</span>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-right" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-right" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-right" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-right" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-pinterest pull-right" data-toggle="tooltip" data-placement="top" title="Pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-call pull-right" data-toggle="tooltip" data-placement="top" title="Email">
									<i class="icon-email3"></i>
									<i class="icon-email3"></i>
								</a>

							</div>
							<!-- /SHARE POST -->


							<div class="divider"><!-- divider --></div>

							
							<ul class="pager">
								<li class="previous"><a class="noborder" href="#">&larr; Previous Post</a></li>
								<li class="next"><a class="noborder" href="#">Next Post &rarr;</a></li>
							</ul>


							<div class="divider"><!-- divider --></div>

							
							<!-- COMMENTS -->
							<div id="comments" class="comments">

								<h4 class="page-header margin-bottom-60 size-20">
									<span>3</span> COMMENTS
								</h4>

								<!-- comment item -->
								<div class="comment-item">

									<!-- user-avatar -->
									<span class="user-avatar">
										<img class="pull-left media-object" src="assets/images/avatar.png" width="64" height="64" alt="">
									</span>

									<div class="media-body">
										<a href="#commentForm" class="scrollTo comment-reply">reply</a>
										<h4 class="media-heading bold">John Doe</h4>
										<small class="block">June 29, 2014 - 11:23</small>
										Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
									</div>
								</div>

								<!-- comment item -->
								<div class="comment-item">

									<!-- user-avatar -->
									<span class="user-avatar">
										<img class="pull-left media-object" src="assets/images/avatar.png" width="64" height="64" alt="">
									</span>

									<div class="media-body">
										<a href="#commentForm" class="scrollTo comment-reply">reply</a>
										<h4 class="media-heading bold">Diana Doe</h4>
										<small class="block">June 29, 2014 - 11:23</small>
										Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
									</div>
								</div>

								<!-- comment item -->
								<div class="comment-item">

									<!-- user-avatar -->
									<span class="user-avatar">
										<img class="media-object" src="assets/images/avatar.png" width="64" height="64" alt="">
									</span>

									<div class="media-body">
										<a href="#commentForm" class="scrollTo comment-reply">reply</a>
										<h4 class="media-heading bold">Melissa Doe</h4>
										<small class="block">June 29, 2014 - 11:23</small>
										Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 

										<!-- comment reply -->
										<div class="media">

											<!-- user-avatar -->
											<span class="user-avatar">
												<img class="media-object" src="assets/images/avatar.png" width="64" height="64" alt="">
											</span>

											<div class="media-body">
												<h4 class="media-heading bold">Peter Doe</h4>
												<small class="block">June 29, 2014 - 11:23</small>
												Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
											</div>
										</div>

									</div>
								</div>



								<h4 class="page-header size-20 margin-bottom-60 margin-top-100">
									LEAVE A <span>COMMENT</span>
								</h4>

								<!-- Form -->
								<form action="#" method="post">

									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label>NAME</label>
												<input required="required" type="text" value="" maxlength="100" class="form-control input-lg" name="author" id="author">
											</div>
											<div class="col-md-4">
												<label>EMAIL</label>
												<input required="required" type="email" value="" maxlength="100" class="form-control input-lg" name="contact_email" id="contact_email">
											</div>
											<div class="col-md-4">
												<label>WEBSITE</label>
												<input type="email" value="" maxlength="100" class="form-control input-lg" name="url" id="url">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>COMMENT</label>
												<textarea required="required" maxlength="5000" rows="5" class="form-control" name="comment" id="comment"></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">

											<button class="btn btn-3d btn-lg btn-reveal btn-black">
												<i class="fa fa-check"></i>
												<span>SUBMIT MESSAGE</span>
											</button>

										</div>
									</div>

								</form>
								<!-- /Form -->

							</div>
							<!-- /COMMENTS -->


						</div>

						<!-- RIGHT -->
						<div class="col-md-3 col-sm-3">

							<!-- INLINE SEARCH -->
							<div class="inline-search clearfix margin-bottom-30">
								<form action="#" method="get" class="widget_search">
									<input type="search" placeholder="Start Searching..." id="s" name="s" class="serch-input">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
							<!-- /INLINE SEARCH -->

							<hr />

							<!-- side navigation -->
							<div class="side-nav margin-bottom-60 margin-top-30">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>CATEGORIES</h4>
								</div>
								<ul class="list-group list-group-bordered list-group-noicon uppercase">
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(12)</span> MEDIA</a></li>
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(8)</span> MOVIES</a></li>
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(32)</span> NEW</a></li>
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(16)</span> TUTORIALS</a></li>
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(2)</span> DEVELOPMENT</a></li>
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(1)</span> UNCATEGORIZED</a></li>

								</ul>
								<!-- /side navigation -->

							
							</div>


							<!-- JUSTIFIED TAB -->
							<div class="tabs nomargin-top hidden-xs margin-bottom-60">

								<!-- tabs -->
								<ul class="nav nav-tabs nav-bottom-border nav-justified">
									<li class="active">
										<a href="#tab_1" data-toggle="tab">
											Popular
										</a>
									</li>
									<li>
										<a href="#tab_2" data-toggle="tab">
											Recent
										</a>
									</li>
								</ul>

								<!-- tabs content -->
								<div class="tab-content margin-bottom-60 margin-top-30">

									<!-- POPULAR -->
									<div id="tab_1" class="tab-pane active">

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/1-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Maecenas metus nulla</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/2-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Curabitur pellentesque neque eget diam</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/3-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Nam et lacus neque. Ut enim massa, sodales</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->

									</div>
									<!-- /POPULAR -->


									<!-- RECENT -->
									<div id="tab_2" class="tab-pane">

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/4-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Curabitur pellentesque neque eget diam</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/5-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Maecenas metus nulla</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/6-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Quisque ut nulla at nunc</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->
									</div>
									<!-- /RECENT -->

								</div>

							</div>
							<!-- JUSTIFIED TAB -->


							<!-- TAGS -->
							<h3 class="hidden-xs size-16 margin-bottom-20">TAGS</h3>
							<div class="hidden-xs margin-bottom-60">

								<a class="tag" href="#">
									<span class="txt">RESPONSIVE</span>
									<span class="num">12</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">CSS</span>
									<span class="num">3</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">HTML</span>
									<span class="num">1</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">JAVASCRIPT</span>
									<span class="num">28</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">DESIGN</span>
									<span class="num">6</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">DEVELOPMENT</span>
									<span class="num">3</span>
								</a>

							</div>


							<!-- TWIITER WIDGET -->
							<h3 class="hidden-xs size-16 margin-bottom-10">TWITTER FEED</h3>							
							<ul class="hidden-xs widget-twitter margin-bottom-60" data-php="php/twitter/tweet.php" data-username="stepofweb" data-limit="3">
								<li></li>
							</ul>

							<!-- FEATURED VIDEO -->
							<h3 class="hidden-xs size-16 margin-bottom-10">FEATURED VIDEO</h3>
							<div class="hidden-xs embed-responsive embed-responsive-16by9 margin-bottom-60">
								<iframe class="embed-responsive-item" src="http://player.vimeo.com/video/8408210" width="800" height="450"></iframe>
							</div>

							<!-- FLICKR WIDGET -->
							<h3 class="hidden-xs size-16 margin-bottom-10">FLICKR PHOTO</h3>
							<div class="hidden-xs widget-flickr clearfix lightbox margin-bottom-60" data-id="37304598@N02" data-limit="16" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'></div>


							<!-- FACEBOOK -->
							<iframe class="hidden-xs" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fstepofweb&amp;width=263&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:263px; height:258px;"></iframe>


							<hr />


							<!-- SOCIAL ICONS -->
							<div class="hidden-xs margin-top-30 margin-bottom-60">
								<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
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

								<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
							</div>

						</div>

					</div>


				</div>
			</section>
			<!-- / -->

@stop
