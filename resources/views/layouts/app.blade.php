<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- fontaweasone --}}
<script src="https://kit.fontawesome.com/3ebee777dc.js" crossorigin="anonymous"></script>
<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('Assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('Assets/css/colors/green.css') }}" id="colors">

<!-- Font awesome cdn CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<!-- Bootstrap core CSS -->
<link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('Assets/css/styles.css') }}" />

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]

</head>

<body>
<div id="wrapper">


  {{-- Header --}}
================================================== -->
<header>
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
			<h1><a href="#"><img src="{{ asset('Assets/images/logo.png') }}" alt="Work Scout" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu ">
			<ul id="responsive">

				<li><a href="#" id="current">Home</a>
					  <ul>
						<li><a href="#">Home #1</a></li> -->
						<li><a href="index-2.html">Home #2</a></li>
						<li><a href="index-3.html">Home #3</a></li>
						<li><a href="index-4.html">Home #4</a></li>
					</ul>
				</li>

				<li><a href="#">Pages</a>
					<ul>
						<li><a href="job-page.html">Job Page</a></li>
						<li><a href="job-page-alt.html">Job Page Alternative</a></li>
						<li><a href="resume-page.html">Resume Page</a></li>
						<li><a href="shortcodes.html">Shortcodes</a></li>
						<li><a href="pricing-tables.html">Pricing Tables</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</li>

				<li><a href="#">For Candidates</a>
					<ul>
						<li><a href="browse-jobs.html">Browse Jobs</a></li>
						<li><a href="browse-categories.html">Browse Categories</a></li>
						<li><a href="add-resume.html">Add Resume</a></li>
						<li><a href="manage-resumes.html">Manage Resumes</a></li>
						<li><a href="job-alerts.html">Job Alerts</a></li>
					</ul>
				</li>

				<li><a href="#">For Employers</a>
					<ul>
						<li><a href="add-job.html">Add Job</a></li>
						<li><a href="manage-jobs.html">Manage Jobs</a></li>
						<li><a href="manage-applications.html">Manage Applications</a></li>
						<li><a href="browse-resumes.html">Browse Resumes</a></li>
					</ul>
				</li>

				<li><a href="blog.html">Blog</a></li>
			</ul>

                @auth
                    <ul class="float-right">
                        <li><a href= "{{ route('logout') }}"><i class="fa fa-lock"></i> LogOut</a></li>
                    </ul>
                @else
                    <ul class="float-right">
                        <li><a href= "{{ route('signup') }}"><i class="fa fa-user"></i> Sign Up</a></li>
                        <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Log In</a></li>
                    </ul>
                    {{-- @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif --}}
                @endauth


		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>



           @yield('content')


<!-- Footer
================================================== -->
<div class="margin-top-15"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="seven columns">
			<h4>About</h4>
			<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			<a href="#" class="button">Get Started</a>
		</div>

		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="#">About Us</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Our Blog</a></li>
				<li><a href="#">Terms of Service</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Hiring Hub</a></li>
			</ul>
		</div>

		<div class="three columns">
			<h4>Press</h4>
			<ul class="footer-links">
				<li><a href="#">In the News</a></li>
				<li><a href="#">Press Releases</a></li>
				<li><a href="#">Awards</a></li>
				<li><a href="#">Testimonials</a></li>
				<li><a href="#">Timeline</a></li>
			</ul>
		</div>

		<div class="three columns">
			<h4>Browse</h4>
			<ul class="footer-links">
				<li><a href="#">Freelancers by Category</a></li>
				<li><a href="#">Freelancers in USA</a></li>
				<li><a href="#">Freelancers in UK</a></li>
				<li><a href="#">Freelancers in Canada</a></li>
				<li><a href="#">Freelancers in Australia</a></li>
				<li><a href="#">Find Jobs</a></li>

			</ul>
		</div>

	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
				<div class="copyrights">©  Copyright 2015 by <a href="#">Work Scout</a>. All Rights Reserved.</div>
			</div>
		</div>
	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="{{ asset('Assets/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('Assets/scripts/custom.js') }}"></script>
<script src="{{ asset('Assets/scripts/jquery.superfish.js') }}"></script>
<script src="{{ asset('Assets/scripts/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('Assets/scripts/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('Assets/scripts/jquery.themepunch.showbizpro.min.js') }}"></script>
<script src="{{ asset('Assets/scripts/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('Assets/scripts/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('Assets/scripts/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('Assets/scripts/waypoints.min.js') }}"></script>
<script src="{{ asset('Assets//jquery.counterup.min.js') }}"></script>
<script src="{{ asset('Assets/scripts/jquery.jpanelmenu.js') }}"></script>
<script src="{{ asset('Assets/scripts/stacktable.js') }}"></script>
<script src="{{ asset('Assets/js/bootstrap.bundle.min.js') }}"></script>



</body>
</html>
