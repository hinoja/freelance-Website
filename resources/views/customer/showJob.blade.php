

@php
use App\Models\freelance_jobs;
@endphp
@extends('layouts.app')
@section('content')
         <!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span><a href="browse-jobs.html">{{$job->category->name }}   /  Team Member-Crew </a></span>
			<h2>    <br> <strong>{{  $job->title}}</strong>
            </h2>
		</div>
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
			<div class="clearfix"> </div>
            <br><br>
            @forelse ( $job->tags  as $tag)
                 <span  style="padding: 5px;background:rgb(119, 226, 119);color:black;"> {{ $tag->name }}  </span>
            @empty
                 <span class="internship" style="padding: 5px;">   NO-Tag </span>
            @endforelse
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

		</ul>

		<br>

		<h4 class="margin-bottom-10">Job Requirment</h4>

		<ul class="list-1">

            @forelse ( $job->requirements as $requirements )
                    <li> {{ $requirements->name }}</li>
            @empty
                   <span style="text-transform: uppercase">#   No-Requirement (S)   #</span>
            @endforelse

		</ul>

	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Overview <span class="full-time" style="padding:5px;">
                {{ $job->states->last()->name  }} </span></h4>
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

              @auth
                    @if (Auth::user()->role_id != 2)
                       @if (empty($job->end_at))
                            {{-- @if(Auth::user()->userable->jobs() appartient $job) --}}
                            @if( freelance_jobs::Where('freelance_id',Auth::user()->userable->id)->Where('job_id',$job->id)->first() )
                            {{-- @if($job->isSelected( Auth::user()->userable->id) && $job->isFreelanceHasApplysJob()) --}}
                            <a href="#" class=" button" style="background-color:rgb(3, 70, 33)"> You had already enrolled </a>
                            {{-- @elseif($job->isFreelanceHasApplysJob() ) --}}
                              <a href="{{ route('job.cancel',$job) }}" class=" button"> Cancel Apply</a>
                             {{-- @else --}}
                            <a href="{{ route('job.apply',$job) }}" class="button">Apply For This Job</a>
                            {{-- @endif --}}


                        @else
                        <a href="#" class="button" style="background-color:gray">Now, You can't  apply to this job</a>
                       @endif

                    @endif
			    @else
							<a href="{{ route('login.view') }}" class=" button" >Please Sign In to apply this job</a>
               @endauth


			</div>

		</div>

	</div>
	<!-- Widgets / End -->


</div>




@endsection

@push('script')
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

@endpush

