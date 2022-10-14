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
                    <span>We found 1,412 jobs matching:</span>
                    <h2>Web, Software & IT</h2>
                </div>
                @if(Auth::user())
                  @if (Auth::user()->role_id != 1)
                        <div class="six columns">
                            <a href="{{ route('job.index') }}" class="button">Post a Job, It’s Free!</a>
                        </div>
                  @endif

                @endif


            </div>
        </div>


        <!-- Content
        ================================================== -->
        <div class="container">
            <!-- Recent Jobs -->
            <div class="eleven columns">
            <div class="padding-right">

                {{-- <form action="#" method="get" class="list-search">
                    <button><i class="fa fa-search"></i></button>
                    <input type="text" placeholder="job title, keywords or company name" value=""/>
                    <div class="clearfix"></div>
                </form> --}}
                @livewire('search')



            </div>
            </div>


            <!-- Widgets -->
            <div class="five columns">

                <!-- Sort by -->
                <div class="widget">
                    <h4>Sort by</h4>

                    <!-- Select -->
                    <select data-placeholder="Choose Category" class="chosen-select-no-single">
                        <option selected="selected" value="recent">Newest</option>
                        <option value="oldest">Oldest</option>
                        <option value="expiry">Expiring Soon</option>
                        <option value="ratehigh">Hourly Rate – Highest First</option>
                        <option value="ratelow">Hourly Rate – Lowest First</option>
                    </select>

                </div>

                <!-- Location -->
                <div class="widget">
                    <h4>Location</h4>
                    <form action="#" method="get">
                        <input type="text" placeholder="State / Province" value=""/>
                        <input type="text" placeholder="City" value=""/>

                        <input type="text" class="miles" placeholder="Miles" value=""/>
                        <label for="zip-code" class="from">from</label>
                        <input type="text" id="zip-code" class="zip-code" placeholder="Zip-Code" value=""/><br>

                        <button class="button">Filter</button>
                    </form>
                </div>

                <!-- Job Type -->
                <div class="widget">
                    <h4>Job Type</h4>

                    <ul class="checkboxes">
                        <li>
                            <input id="check-1" type="checkbox" name="check" value="check-1" checked>
                            <label for="check-1">Any Type</label>
                        </li>
                        <li>
                            <input id="check-2" type="checkbox" name="check" value="check-2">
                            <label for="check-2">Full-Time <span>(312)</span></label>
                        </li>
                        <li>
                            <input id="check-3" type="checkbox" name="check" value="check-3">
                            <label for="check-3">Part-Time <span>(269)</span></label>
                        </li>
                        <li>
                            <input id="check-4" type="checkbox" name="check" value="check-4">
                            <label for="check-4">Internship <span>(46)</span></label>
                        </li>
                        <li>
                            <input id="check-5" type="checkbox" name="check" value="check-5">
                            <label for="check-5">Freelance <span>(119)</span></label>
                        </li>
                    </ul>

                </div>

                <!-- Rate/Hr -->
                <div class="widget">
                    <h4>Rate / Hr</h4>

                    <ul class="checkboxes">
                        <li>
                            <input id="check-6" type="checkbox" name="check" value="check-6" checked>
                            <label for="check-6">Any Rate</label>
                        </li>
                        <li>
                            <input id="check-7" type="checkbox" name="check" value="check-7">
                            <label for="check-7">$0 - $25 <span>(231)</span></label>
                        </li>
                        <li>
                            <input id="check-8" type="checkbox" name="check" value="check-8">
                            <label for="check-8">$25 - $50 <span>(297)</span></label>
                        </li>
                        <li>
                            <input id="check-9" type="checkbox" name="check" value="check-9">
                            <label for="check-9">$50 - $100 <span>(78)</span></label>
                        </li>
                        <li>
                            <input id="check-10" type="checkbox" name="check" value="check-10">
                            <label for="check-10">$100 - $200 <span>(98)</span></label>
                        </li>
                        <li>
                            <input id="check-11" type="checkbox" name="check" value="check-11">
                            <label for="check-11">$200+ <span>(21)</span></label>
                        </li>
                    </ul>

                </div>



            </div>
            <!-- Widgets / End -->


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
<script src="{{ asset('Assets/scripts/js/bootstrap.bundle.min.js') }}"></script>
@endsection

