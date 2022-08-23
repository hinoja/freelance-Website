<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
			<h1><a href="{{ route('index') }}"><img src="{{ asset('Assets/images/logo.png') }}" alt="Work Scout" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu ">

            @auth
                <ul id="responsive">

                    <li><a href="#" id="current">Home</a>
                        <ul>
                            <li><a href="#">Home #1</a></li>
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
                            <li><a href="{{ route('resume.index') }}">Add Resume</a></li>
                            <li><a href="{{ route('resume.manage') }}">Manage Resumes</a></li>
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
                <ul class="float-right">
                    <li><a href= "{{ route('logout') }}"><i class="fa fa-lock"></i> LogOut</a></li>
                </ul>
            @else
                <ul class="float-right">
                    <li><a href= "{{ route('signup.view') }}"><i class="fa fa-user"></i> Sign Up</a></li>
                    <li><a href="{{ route('login.view') }}"><i class="fa fa-lock"></i> Log In</a></li>
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
