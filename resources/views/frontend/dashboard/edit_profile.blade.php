@extends('frontend.frontend_dashboard')
@section('main_content')
	<!--Page Title-->
	<section class="page-title centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
		<div class="auto-container">
			<div class="content-box clearfix">
				<h1>User Profile </h1>
				<ul class="bread-crumb clearfix">
					<li><a href="index.html">Home</a></li>
					<li>User Profile </li>
				</ul>
			</div>
		</div>
	</section>
	<!--End Page Title-->

	<!-- sidebar-page-container -->
	<section class="sidebar-page-container blog-details sec-pad-2">
		<div class="auto-container">
			<div class="row clearfix">

				<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
					<div class="blog-sidebar">
						<div class="sidebar-widget post-widget">
							<div class="widget-title">
								<h4>User Profile </h4>
							</div>
							<div class="post-inner">
								<div class="post">
									<figure class="post-thumb"><a href="blog-details.html">
											<img src="assets/images/news/post-1.jpg" alt=""></a></figure>
									<h5><a href="blog-details.html">Kazi Ariyan </a></h5>
									<p>user@gmail.com </p>
								</div>
							</div>
						</div>

						<div class="sidebar-widget category-widget">
							<div class="widget-title">
								<h4>Category</h4>
							</div>
							<div class="widget-content">
								<ul class="category-list ">

									<li class="current"> <a href="blog-details.html"><i class="fab fa fa-envelope "></i> Dashboard </a></li>

									<li><a href="blog-details.html"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
									<li><a href="blog-details.html"><i class="fa fa-credit-card" aria-hidden="true"></i> Buy credits<span
												class="badge badge-info">( 10 credits)</span></a></li>
									<li><a href="blog-details.html"><i class="fa fa-list-alt" aria-hidden="true"></i></i> Properties </a></li>
									<li><a href="blog-details.html"><i class="fa fa-indent" aria-hidden="true"></i> Add a Property </a></li>
									<li><a href="blog-details.html"><i class="fa fa-key" aria-hidden="true"></i> Security </a></li>
									<li><a href="blog-details.html"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i> Logout </a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>

				<div class="col-lg-8 col-md-12 col-sm-12 content-side">
					<div class="blog-details-content">
						<div class="news-block-one">
							<div class="inner-box">

								<div class="lower-content">
									<h3>Including Animation In Your Design System.</h3>
									<ul class="post-info clearfix">
										<li class="author-box">
											<figure class="author-thumb"><img src="assets/images/news/author-1.jpg" alt=""></figure>
											<h5><a href="blog-details.html">Eva Green</a></h5>
										</li>
										<li>April 10, 2020</li>
									</ul>

									<form action="signin.html" method="post" class="default-form">
										<div class="form-group">
											<label>Agent name</label>
											<input type="text" name="name" required="">
										</div>
										<div class="form-group">
											<label>Email address</label>
											<input type="email" name="email" required="">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" name="name" required="">
										</div>
										<div class="form-group">
											<label for="formFile" class="form-label">Default file input example</label>
											<input class="form-control" type="file" id="formFile">
										</div>

										<div class="form-group message-btn">
											<button type="submit" class="theme-btn btn-one">Save Changes </button>
										</div>
									</form>

								</div>
							</div>
						</div>

					</div>

				</div>

			</div>
		</div>
	</section>
	<!-- sidebar-page-container -->

	<!-- subscribe-section -->
	<section class="subscribe-section bg-color-3">
		<div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<div class="col-lg-6 col-md-6 col-sm-12 text-column">
					<div class="text">
						<span>Subscribe</span>
						<h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 form-column">
					<div class="form-inner">
						<form action="contact.html" method="post" class="subscribe-form">
							<div class="form-group">
								<input type="email" name="email" placeholder="Enter your email" required="">
								<button type="submit">Subscribe Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- subscribe-section end -->
@endsection
