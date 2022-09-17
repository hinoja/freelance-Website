
@php
    use App\Models\Freelance;
    use App\Models\Experience;
    use Illuminate\Support\Facades\Auth;
@endphp
@extends('layouts.app')
@section('content')
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Manage Resumes</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>Candidate Dashboard</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">

	<!-- Table -->
	<div class="sixteen columns">

		<p class="margin-bottom-25">Your resume can be viewed, edited or removed below.</p>

		<table class="manage-table resumes responsive-table">

			<tr>
                <th><i class="fa fa-file-text"></i> COMANY </th>
				<th><i class="fa fa-user"></i> Job Title</th>
				<th><i class="fa fa-map-marker"></i> Location</th>
				<th><i class="fa fa-calendar"></i> Date Posted</th>
				<th></th>
			</tr>

			<!-- Item #1 -->



                                @forelse ($experiences as $experience )
                                    <tr>
                                        <td class="title">{{$experience->company  }}</td>
                                        <td> {{ $experience->job_title }}</td>
                                        <td>{{ $freelance->location }} </td>
                                        <td>  {{ $experience->start_at}} To  @if (empty($experience->end_at))  EN cours ... @else {{ $experience->end_at }} @endif</td>
                                        <td class="action">
                                            {{-- <a href="#"><i class="fa fa-pencil"></i> Edit</a> --}}
                                            {{-- <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a> --}}
                                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                                        </td>
                                    </tr>
                                @empty




                                @endforelse
		</table>

		<br>

		<a href="{{ route('resume.index') }}" class="button">Add Resume</a>

	</div>

</div>





@endsection

