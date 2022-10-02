@php
    use App\Models\Status;
    use App\Models\Category;
@endphp
@extends('layouts.app')
@section('content')
         <!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span><a href="browse-jobs.html">{{ (Category::find($job->category_id))->name }}  /  {{  $job->title}}</a></span>
			<h2>{{ (Category::find($job->category_id))->name }} Team Member - Crew <span class="full-time">{{ Status::find($job->catgeory_id) }}</span></h2>
		</div>
        @if(Auth::user()->role_id != 2)
            @livewire('favorite',['job'=>$job])
        @endif





	</div>
</div>


<!-- Content
================================================== -->
<div class="container">

	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">

		<!-- Company Info -->
		<div class="company-info">
			<img src="{{ asset('Assets/images/company-logo.png') }}" alt="">
			<div class="content">
				<h4>{{ $job->companyName }}</h4>
				<span><a href="#"><i class="fa fa-link"></i> Website</a></span>
				<span><a href="#"><i class="fa fa-twitter"></i> @kingrestaurants {{ $job->companyDescription }}</a></span>
			</div>
			<div class="clearfix"></div>
		</div>

		{{-- <p class="margin-reset">
			{{ $job->description }}
		</p> --}}

		<br>
		<p>The <strong>{{ $job->title }}</strong> will have responsibilities that include:</p>

		{{-- les taches --}}
            <p class="margin-reset">
                {{ $job->description }}
            </p>
			{{-- <li>Executing the Food Service program, including preparing and presenting our wonderful food offerings
			to hungry customers on the go!
			</li>
			<li>Greeting customers in a friendly manner and suggestive selling and sampling items to help increase sales.</li>
			<li>Keeping our Store food area looking terrific and ready for our valued customers by managing product
			inventory, stocking, cleaning, etc.</li>
			<li>We’re looking for associates who enjoy interacting with people and working in a fast-paced environment!</li> --}}
		</ul>

		<br>

		<h4 class="margin-bottom-10">Job Requirment</h4>
        {{-- $requirement = $job->requirements()->get() --}}
		<ul class="list-1">
            @foreach ($job->requirements()->get() as $requirements)
                <li> {{ $requirements->name }}</li>
            @endforeach
		</ul>

	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Overview</h4>

			<div class="job-overview">

				<ul>
					<li>
						<i class="fa fa-map-marker"></i>
						<div>
							<strong>Location:</strong>
							<span>{{ $job->location }}</span>
						</div>
					</li>
					<li>
						<i class="fa fa-user"></i>
						<div>
							<strong>Job Title:</strong>
							<span> {{ $job->title }}</span>
						</div>
					</li>
					<li>
						<i class="fa fa-clock-o"></i>
						<div>
							<strong>Hours:</strong>
							<span>40h / week</span>
						</div>
					</li>
					<li>
						<i class="fa fa-money"></i>
						<div>
							<strong>Rate:</strong>
							<span>${{ $job->salary }}/ hour</span>
						</div>
					</li>
				</ul>


				<a href="#small-dialog" class="popup-with-zoom-anim button">Apply For This Job</a>

				<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
					<div class="small-dialog-headline">
						<h2>Apply For This Job</h2>
					</div>

					<div class="small-dialog-content">
						<form action="#" method="get" >
							<input type="text" placeholder="Full Name" value=""/>
							<input type="text" placeholder="Email Address" value=""/>
							<textarea placeholder="Your message / cover letter sent to the employer"></textarea>

							<!-- Upload CV -->
							<div class="upload-info"><strong>Upload your CV (optional)</strong> <span>Max. file size: 5MB</span></div>
							<div class="clearfix"></div>

							<label class="upload-btn">
							    <input type="file" multiple />
							    <i class="fa fa-upload"></i> Browse
							</label>
							<span class="fake-input">No file selected</span>

							<div class="divider"></div>

							<button class="send">Send Application</button>
						</form>
					</div>

				</div>

			</div>

		</div>

	</div>
	<!-- Widgets / End -->


</div>




@endsection

@section('script')
    <!-- Scripts
    ================================================== -->
    <script src="{{ asset('Assets/scripts/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('Assets/scripts/custom.js') }}"></script>
    <script src="{{ asset('Assets/scripts/jquery.superfish.js') }}"></script>
    <script src="{{ asset('Assets/scripts/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('Assets/scripts/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('Assets/scripts/jquery.themepunch.showbizpro.min.js') }}"></script>
    <script src="{{ asset('Assets/scripts/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('Assets/scripts/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('Assets/scripts/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('Assets/scripts/waypoints.min.js') }}"></script>
    <script src="{{ asset('Assets/scripts/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('Assets/scripts/jquery.jpanelmenu.js') }}"></script>
    <script src="{{ asset('Assets/scripts/stacktable.js') }}"></script>

@endsection
