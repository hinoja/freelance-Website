
@php
   use Illuminate\Support\Facades\Auth;
@endphp
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
			<h1><a href="{{ route('welcome') }}"><img src="{{ asset('Assets/images/logo.png') }}" alt="Work Scout" /></a></h1>
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
                            <li><a href="{{ route('welcome') }}">Job Page</a></li>
                            <li><a href="job-page-alt.html">Job Page Alternative</a></li>
                            <li><a href="resume-page.html">Resume Page</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                            <li><a href="pricing-tables.html">Pricing Tables</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </li>

                    @if(Auth::user()->role_id != 2)
                        <li><a href="#">For Candidates</a>
                            <ul>
                                <li><a href="{{ route('more.job') }}">Browse Jobs</a></li>
                                <li><a href="browse-categories.html">Browse Categories</a></li>
                                <li><a href="{{ route('resume.index') }}">Add Resume</a></li>
                                <li><a href="{{ route('resume.manage') }}">Manage Resumes</a></li>
                                <li><a href="job-alerts.html">Job Alerts</a></li>
                            </ul>
                        </li>
                    @endif
                   @if(Auth::user()->role_id != 1)

                        <li><a href="#">For Employers</a>
                            <ul>
                                <li><a href="{{ route('job.index') }}">Add Job</a></li>
                                <li><a href="{{ route('job.manage') }}">Manage Jobs</a></li>
                                <li><a href="manage-applications.html">Manage Applications</a></li>
                                <li><a href="browse-resumes.html">Browse Resumes</a></li>
                            </ul>
                        </li>
                    @endif
                    <li style="margin-right: 15px;"><a href="blog.html">Blog</a></li>


                </ul>
                <ul class="float-right">
                    <li class="float-right"><a href="#" style="color: blue">{{ Auth::user()->name }}</a>
                        <ul>
                          @if(Auth::user()->role_id != 2)
                                   <li><a href= "{{ route('freelance.profile.view') }}"><i class="fa fa-pencil"></i> Update Profile</a></li>
                          @endif
                            <li><a href= "{{ route('logout') }}"><i class="fa fa-lock"></i> LogOut</a></li>

                        </ul>
                    </li>
                </ul>





            @else
                <ul class="float-right">
                    <li><a href= "{{ route('signup.view') }}"><i class="fa fa-user"></i> Sign Up</a></li>
                    <li><a href="{{ route('login.view') }}"><i class="fa fa-user"></i> Log In</a></li>
                </ul>

            @endauth


		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
