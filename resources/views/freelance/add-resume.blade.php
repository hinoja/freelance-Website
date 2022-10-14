@extends('layouts.app')
@section('content')
     <!-- Titlebar
    ================================================== -->
    <div id="titlebar" class="single submit-page">
        <div class="container">

            <div class="sixteen columns">
                <h2><i class="fa fa-plus-circle"></i> Add Resume</h2>
            </div>

        </div>
    </div>
    <!-- Content
    ================================================== -->
    <div class="container">
        <ul>
            @foreach ($errors->all() as $error )
                 <div class="alert alert-danger text-center"> <li> {{ $error }}</li> </div>
            @endforeach
        </ul>
        <!-- Submit Page -->
        <div class="sixteen columns">
            <form action="{{ route('resume.add') }}" method="post">
                @csrf
                @method('post')
                <div class="submit-page">

                    <!-- Notice -->
                    <div class="notification notice closeable margin-bottom-40">
                        <p><span>Have an account?</span> If you don’t have an account you can create one below by entering your email address. A password will be automatically emailed to you.</p>
                    </div>
                    <!-- Title -->
			{{-- <div class="form">
				<h5>Professional Title</h5>
				<input class="search-field" name="title" type="text" placeholder="e.g. Web Developer" value="{{ old('title') }}"/>
			</div>

			<!-- Location -->
			<div class="form">
				<h5>Location</h5>
				<input class="search-field" name="location" type="text" placeholder="e.g. London, UK" value="{{ old('location') }}"/>
			</div>
			<!-- Description -->

                <div class="form">
                    <h5>Resume Content</h5>
                    <textarea class="WYSIWYG" name="description" cols="40" rows="3" id="summary" spellcheck="true" value="{{ old('description') }}"> {{ old('description') }}  </textarea>
                </div>
 --}}

                    <!-- Add URLs -->
                    <div class="form with-line">
                        <h5>URL(s)  <span style="color: red">(*)</span></h5>
                        <div class="form-inside">
                            @if (old('url'))
                                @for ($i=0; $i < count(array_filter(old('name_url'))); $i++)
                                    <div class="form boxed url-box">
                                        <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                                      <input class="search-field" name="name_url[]" type="text" value="{{ old('name_url')[$i]}}"/>
<<<<<<< HEAD
                                      <input class="search-field" name="url[]" type="text" value="{{ old('url')[$i]}}"/>
                                    </div>
                                @endfor
                            @endif

                            {{-- Il faut conserver cette div --}}

=======
                                      <input class="search-field" name="url[]" type="url" value="{{ old('url')[$i]}}"/>
                                    </div>
                                @endfor
                            @endif
>>>>>>> joel
                            <!-- Adding URL(s) -->
                            <div class="form boxed box-to-clone url-box">
                                <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                                <input class="search-field" type="text" placeholder="Name" name="name_url[]" value=""/>
<<<<<<< HEAD
                                <input class="search-field" type="text" placeholder="http://" name="url[]" value=""/>
=======
                                <input class="search-field" type="url" placeholder="http://" name="url[]" value=""/>
>>>>>>> joel
                            </div>

                            <a href="#" class="button gray add-url add-box"><i class="fa fa-plus-circle"></i> Add URL</a>
                            <p class="note">Optionally provide links to any of your websites or social network profiles.</p>
                        </div>
                    </div>
                    <!-- Experience  -->
                    <div class="form with-line">
                        <h5>Experience <span style="color: red">(*)</span></h5>
                        <div class="form-inside">

                            <!-- Add Experience -->

                                @if (  old('end_date'))
                                    @for ($i=0; $i < count(array_filter(old('company'))); $i++)
                                     <div class="form boxed experience-box">
                                        <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                                        <input class="search-field form-control" name="company[]" type="text"  value="{{ old('company')[$i]}}"/>
                                        <input class="search-field form-control" type="text" name="job_title[]"  value="{{ old('job_title')[$i]}}"/>
                                        <label for="start_date">Start Date</label>
                                        <input class="search-field form-control " name="start_date[]" type="date"  value="{{ old('start_date')[$i]}}" /> <br>
                                        <label for="end_date"> End Date</label>
                                        <input class="search-field form-control " name="end_date[]" type="date" value="{{ old('end_date')[$i]}}" /> <br>
                                     </div>
                                    @endfor
                                 @endif
                                 <div class="form boxed box-to-clone experience-box">

                                    <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                                    <input class="search-field form-control" name="company[]" type="text" placeholder="Company" value=" "/>
                                    <input class="search-field form-control" type="text" name="job_title[]" placeholder="Job Title" value=" "/>
                                    <label for="start_date">Start Date</label>
                                    <input class="search-field form-control " name="start_date[]" type="date" placeholder="Start  date"  /> <br>
                                    <label for="end_date"> End Date</label>
                                    <input class="search-field form-control " name="end_date[]" type="date" placeholder="End  date"  /> <br>
                                </div>


                            <a href="#" class="button gray add-experience add-box"><i class="fa fa-plus-circle"></i> Add Experience</a>

                        </div>
                    </div>
                    <div class="divider margin-top-0 padding-reset"></div>

                    <button type="submit" class="button big margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></button>

                </div>
            </form>
        </div>

    </div>


@endsection


@section('script')
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
<script type="text/javascript" src="{{ asset('Assets/scripts/jquery.sceditor.bbcode.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Assets/scripts/jquery.sceditor.js') }}"></script>
