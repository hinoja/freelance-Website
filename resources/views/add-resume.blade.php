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
            <div class="alert alert-danger"> <li> {{ $error }}</li> </div>
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

                    <!-- Add URLs -->
                    <div class="form with-line">
                        <h5>URL(s)  <span style="color: red">(*)</span></h5>
                        <div class="form-inside">

                            <!-- Adding URL(s) -->
                            <div class="form boxed box-to-clone url-box">
                                <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                                <input class="search-field" type="text" name="name_url[]" placeholder="Name" value="{{ old('name_url') }}"/>
                                <input class="search-field" type="text"       name="url[]" placeholder="http://" value="{{ old('url') }}"/>
                            </div>

                            <a href="#" class="button gray add-url add-box"><i class="fa fa-plus-circle"></i> Add URL</a>
                            <p class="note">Optionally provide links to any of your websites or social network profiles.</p>
                        </div>
                    </div>


                    {{-- <!-- Education -->
                    <div class="form with-line">
                        <h5>Education <span>(optional)</span></h5>
                        <div class="form-inside">

                            <!-- Add Education -->
                            <div class="form boxed box-to-clone education-box">
                                <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                                <input class="search-field" type="text" placeholder="School Name" value=""/>
                                <input class="search-field" type="text" placeholder="Qualification(s)" value=""/>
                                <input class="search-field" type="text" placeholder="Start / end date" value=""/>
                                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Notes (optional)"></textarea>
                            </div>

                            <a href="#" class="button gray add-education add-box"><i class="fa fa-plus-circle"></i> Add Education</a>
                        </div>
                    </div> --}}


                    <!-- Experience  -->
                    <div class="form with-line">
                        <h5>Experience <span style="color: red">(*)</span></h5>
                        <div class="form-inside">

                            <!-- Add Experience -->
                            <div class="form boxed box-to-clone experience-box">
                                <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                                <input class="search-field form-control" name="company[]" type="text" placeholder="Company" value="{{ old('company') }}"/>
                                <input class="search-field form-control" type="text" name="job_title[]" placeholder="Job Title" value="{{ old('company') }}"/>
                                <label for="start_date[]">Start Date</label>
                                <input class="search-field form-control " name="start_date[]" type="date" placeholder="Start  date"  /> <br>
                                <label for="end_date"> End Date</label>
                                <input class="search-field form-control " name="end_date[]" type="date" placeholder="Start  date"  /> <br>
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
