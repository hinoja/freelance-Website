@extends('layouts.app')
@section('content')
     <!-- Titlebar
    ================================================== -->
    <div id="titlebar" class="single submit-page">
        <div class="container">

            <div class="sixteen columns">
                <h2> <i class="fa fa-plus-circle"></i> {{ Auth::user()->name }}, Update your Profile</h2>
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
            <form action="{{ route('freelance.profile.post') }}" method="post">
                @csrf
                @method('post')
                <div class="submit-page">

                    <!-- Notice -->
                    <div class="notification notice closeable margin-bottom-40">
                        <p><span>Have an account?</span> If you don’t have an account you can create one below by entering your email address. A password will be automatically emailed to you.</p>
                    </div>
                     <!-- Name -->
                    <div class="form">
                        <h5>Update Name</h5>
                        <input class="search-field" name="name" type="text" required  value="{{ Auth::user()->name }}"/>
                    </div>

                     <!-- Title -->
                    <div class="form">
                        <h5>Professional Title</h5>
                        <input class="search-field" name="title" required type="text" placeholder="e.g. Web Developer"   @if( Auth::user()->userable->profession) value={{ Auth::user()->userable->profession }} @else {{  old('title')}} @endif>
                    </div>

                    <!-- Location -->
                    <div class="form">
                        <h5>Location</h5>
                        <input class="search-field" name="location" required type="text" placeholder="e.g. London, UK"  @if( empty(old('location'))) value={{ Auth::user()->userable->location  }} @else {{ old('location')  }} @endif >
                    </div>

                    <!-- Salaries -->
                    <div class="form">
                        <h5>Salary(optional)</h5>
                        <input class="search-field" name="salaries"  type="numeric" min="5"  placeholder="30 ($)"   @if( empty(old('salaries'))) value={{ Auth::user()->userable->salaries  }} @else {{ old('salaries')  }} @endif >
                    </div>
                    {{-- <div class="form">
                        <h5>Email</h5>
                                 <input class="search-field" name="email" required type="text" placeholder="e.g. name@gmail.com"   @if( empty(old('mail'))) value={{  old('mail')}} @else {{ Auth::user()->userable->mail }} @endif />
                    </div> --}}
                    <!-- Description -->

                        <div class="form">
                            <h5>Resume Content</h5>
                            <textarea class="WYSIWYG" name="description"  cols="40" rows="3" id="summary" spellcheck="true" value="{{ old('description') }}" required>  @if( Auth::user()->userable->description) {{ Auth::user()->userable->description }} @else {{  old('title')}} @endif  </textarea>
                        </div>
                         <!-- Notice -->
                        {{-- <div class="notification notice closeable margin-bottom-40 " style="background-color: rgb(245, 216, 216)">
                            <p><span>Do you Delete Your account?<strong style="color: red">(Danger)</strong></span> If true .</p>
                        </div> --}}
                           <!-- Desactivation -->
                        {{-- <div class="form">

                            <h5>State Account </h5>
                            <select name="status"   class="notification notice  margin-bottom-40">
                               <option value="1">Activate</option>
                               <option value="0"> Delete</option>
                            </select>

                        </div> --}}
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

