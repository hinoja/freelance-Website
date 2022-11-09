

@php
    use App\Models\User;
    use App\Models\Status;
    use App\Models\Category;
    use App\Models\freelance_job;
@endphp
@extends('layouts.app')
@section('content')
         <!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span><a href="browse-jobs.html">{{ (Category::find($job->category_id))->name }}  /  Team Member-Crew </a></span>
			<h2>{{ (Category::find($job->category_id))->name }} <br> <strong>{{  $job->title}}</strong> <span class="full-time"> {{ $job->state->name }}  {{ Status::find($job->catgeory_id) }}</span>



            </h2>
		</div>
        {{-- @if(Auth::user()->role_id != 2)
            @livewire('favorite',['job'=>$job])
        @endif --}}


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
            @forelse ( $job->tags  as $tag)
                 <span class="internship" style="padding: 5px;"> {{ $tag->name }}  </span>
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
        {{-- $requirement = $job->requirements()->get() --}}
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

             @if(Auth::user())
					@if (Auth::user()->role_id != 2)
								@if (count ($job->freelances) > 0)
									<a href="{{ route('job.cancel',$job->id) }}" class=" button"> Cancel Apply</a>
								@else
									<a href="{{ route('job.apply',$job->id) }}" class="button">Apply For This Job</a>
								@endif
						@endif
			   @else
							<a href="{{ route('login.view') }}" class=" button" >Please Sign In to apply this job</a>

              @endif
				{{-- <div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
					<div class="small-dialog-headline">
						<h2>Apply For This Job</h2>
					</div>

					<div class="small-dialog-content">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
						<form action="{{ route('job.apply',$job->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
							<input type="text" name="name" required placeholder="Full Name" value="{{ old('name') }}"/>
							<input type="email" name="email" readonly placeholder="Email Address" value="{{ (User::where('userable_id','=',$job->customer_id )->first())->email }}"/>
							<textarea name="message" placeholder="Your message / cover letter sent to the employer"></textarea>

							<!-- Upload CV -->
							<div class="upload-info"><strong>Upload your CV (optional)</strong> <span>Max. file size: 5MB</span></div>
							<div class="clearfix"></div>

							<label class="upload-btn">
							    <input type="file" name="file" />
							    <i class="fa fa-upload"></i> Browse
							</label>
							<span class="fake-input">No file selected</span>

							<div class="divider"></div>

							<button class="send">Send Application</button>
						</form>
					</div>

				</div> --}}

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

