<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the apple mobile web app capable -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the apple mobile web app status bar style -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- set the description -->
	<meta name="description" content="Wecode software developer>
	<meta name="keywords" content="wecode, abuja, technology">
	<meta name="author" content="Wecode">
	<!-- Page Title -->
	<title>WECODE Nigeria - Let's build awesome software together</title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CWork+Sans:300,400,500,600" rel="stylesheet">

	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="/css/wecode.min.css">	
	<link rel="stylesheet" href="/css/responsive.css">

</head>
<body>
	<!-- start of main page wrapper -->
	<div id="wrapper">
		<!-- start of preloader -->
		<div class="loader-container" id="loader">
			<div class="spinner spinner-round"></div>
		</div><!-- end of preloader -->
		<div class="w1">
			<!-- start of page header -->
			<header id="header" class="nospace">
				<!-- header holder -->
				<div class="header-holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<!-- Page logo -->
								<div class="logo pull-left"><a href="/"><img src="/logo.png" /></a></div>
								<div class="holder pull-right">
									<a href="#" class="pe-7s-menu menu-opener opener pull-right visible-xs"></a>

									<a href="#" class="pe-7s-search search-opener pull-right opener"></a>
									<!-- start of page navigation -->
									<nav id="nav" class="text-uppercase">
										<ul class="list-inline">
											<li>
												<a class="drop-link" href="#">Our Community</a>
												<!--div class="drop">
													<ul class="list-unstyled">
														<li><a href="#">Menu 1</a></li>
														<li><a href="#">Menu 1</a></li>
														<li><a href="#">Menu 1</a></li>
													</ul>
												</div-->
											</li>
											<li>
												<a class="drop-link" href="#">Meetups</a>
											</li>
											<li>
												<a class="drop-link" href="#">Hackathon</a>
											</li>
											<li>
												<a class="drop-link" href="#">Code sessions</a>
											</li>
											<li>
												<a class="drop-link" href="#">Our projects</a>
												<div class="drop">
													<ul class="list-unstyled">
														<li><a href="#">Faker.ng</a></li>
													</ul>
												</div>
											</li>
											<li>
												<a class="drop-link" href="#">Contact us</a>
											</li>

										</ul>
									</nav><!-- end of page navigation -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</header><!-- end of page header -->
			<!-- start of search-popup -->
			<div class="search-popup">
				<div class="holder">
					<a href="#" class="search-close"><span></span><span></span></a>
					<div class="frame">
						<form action="#">
							<fieldset>
								<input placeholder="Search here..." type="text">
								<button class="pe-7s-search" type="submit"></button>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!-- end of search-popup -->
			<!-- start of page main section -->
			<main id="main" class="bg-grey">
				<!-- start of page-header -->
				<div class="page-header text-center bg-img-full" style="background-image: url(http://placehold.it/1920x750);">
					<span class="bg-overlay"></span>
					<div class="container pad-top-xs pad-bottom-lg">
						<div class="row pad-top-md pad-bottom-xs">
							<div class="col-xs-12">
								<h3 class="">WeCode Hackathon in Collaboration with Aiivon Hub</h3>

							</div>
						</div>
					</div>
				</div><!-- end of page-header -->
                <section>

					<div class="border-top"></div>
					<div class="row mar-bottom-md">
						<div class="col-xs-12 pad-top-lg">
							<!-- start of main-heading -->
							<header class="main-heading-main text-center row">
								<div class="col-xs-12">
									<h2 class="heading">Register here</h2>
									<p>Complete the form below and join us for an awseome moment.</p>
								</div>
							</header><!-- end of main-heading -->
						</div>
					</div>
					<div class="row mar-bottom-lg">
						<div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
						@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

							<form id="contactForm2" action="/register-hackathon" method="post">
                              {{ csrf_field() }}
								<!-- start of contact-form -->
								<div class="contact-form">
									<div class="row">
										<div class="col-xs-12">
											<input type="text" class="form-control" placeholder="Your name*" id="name" name="name">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<input type="email" class="form-control" placeholder="Email address*" id="email" name="email">
										</div>
										<div class="col-xs-12 col-sm-6">
											<input type="text" class="form-control" placeholder="Phone number" id="phone" name="phone">
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12">
											<input type="text" class="form-control" placeholder="Job title*" id="jobtitle" name="jobtitle">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<input type="text" class="form-control" placeholder="Your organisation*" id="organisation" name="organisation">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div id="msgSubmit" class="form-message hidden"></div>
											<button class="btn btn-full" style="border: 2px solid #2A003F; color:#2A003F" type="submit" id="form-submit">Submit</button>
										</div>
									</div>
								</div><!-- end of contact-form -->
							</form>
						</div>
					</div>
				</div>
                
                
                </section>

				<!-- start of t-section -->
				<div class="bg-img-full bg-img-parallax t-section pad-top-lg pad-bottom-lg" style="background-image: url('bg.png');">
					<span class="bg-overlay"></span>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-md-10 col-lg-8 col-md-push-1 col-lg-push-2">
								<!-- t-slider -->
								<div class="t-slider">
									<!-- slide -->
									<div class="slide text-center">
										<blockquote>
											<!--<img src="http://placehold.it/80x80" alt="img" class="img img-responsive">-->
											<q>The community has been awesome and I have met and worked with solid people in the community. </q>
											<cite>Omosigho Ozo-Eson, @ozoesono.</cite>
										</blockquote>
									</div>
									<!-- slide -->
									<div class="slide text-center">
										<blockquote>
											<!--<img src="http://placehold.it/80x80" alt="img" class="img img-responsive">-->
											<q>The biggest benefit of our meet-ups is that it has helped each of us connect with folks who know their home-work well. By connecting with other developers from far and wide, not only are we making new friends but also acquiring a whole spectrum of knowledge.  </q>
											<cite>Dimgba Kalu, @dmkalu.</cite>
										</blockquote>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div><!-- end of t-section -->

				<!-- start of promo-box -->
				<div class="main-bg-color2 text-center promo-box">
					<div class="container pad-top-md pad-bottom-md">
						<div class="row">
							<div class="col-xs-12">
								<span class="txt">Become a member!</span>
								<a href="https://goo.gl/forms/QujbzPZ3YkrnCUgh2" target="blank" class="btn btn-white text-uppercase">Join us now</a>
							</div>
						</div>
					</div>
				</div><!-- end of promo-box -->
			</main><!-- end of page main section -->
			<!-- start of page footer -->
			<footer id="footer">

				<!-- start of f-bottom -->
				<div class="bg-dark3 f-bottom">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<span class="pull-left">© Wecode 2017, All Rights Reserved.</span>
								<span class="pull-right"><a href="#">Policy Privacy</a>  &nbsp; &nbsp; &nbsp; &nbsp; <a href="#">Terms &amp; Conditions</a></span>
							</div>
						</div>
					</div>
				</div><!-- end of f-bottom -->
			</footer><!-- end of page footer -->
		</div>
		<!-- Back Top of the page -->
	    <span id="back-top" class="pe-7s-angle-up main-bg-color"></span>
	</div><!-- end of main page wrapper -->

	<script src="/js/wecode.min.js"></script>
</body>
</html>