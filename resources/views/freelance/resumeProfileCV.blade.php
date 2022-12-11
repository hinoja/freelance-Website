@extends('layouts.app')
@section('content')
    <!-- Titlebar
            ================================================== -->
    <div id="titlebar" class="resume">
        <div class="container">
            <div class="ten columns">
                <div class="resume-titlebar">
                    <img src="{{ asset('Assets/images/resumes-list-avatar-01.png') }}" alt="">
                    <div class="resumes-list-content">
                        <h4>{{ $user->name }} <span>UX/UI Graphic Designer</span></h4>
                        <span class="icons"><i class="fa fa-map-marker"></i> {{ $user->userable->location }}</span>
                        <span class="icons"><i class="fa fa-money"></i> ${{ $user->userable->salaries }} / hour</span>
                        <span class="icons"><a href="#"><i class="fa fa-link"></i> Website</a></span>
                        <span class="icons"><a href="mailto:{{ $user->email }}"><i class="fa fa-envelope"></i>
                                {{ $user->email }}</a></span>
                        <div class="skills">
                            {{-- <span>test</span> --}}
                            @foreach ($user->userable->tags as $tag)
                                <span>{{ $tag->name }}</span>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>

            <div class="six columns">
                <div class="two-buttons">

                    <a href="#small-dialog" class="popup-with-zoom-anim button"><i class="fa fa-envelope"></i> Send
                        Message</a>

                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
                        <div class="small-dialog-headline">
                            <h2>Send Message to John Doe</h2>
                        </div>

                        <div class="small-dialog-content">
                            <form action="#" method="get">
                                <input type="text" placeholder="Full Name" value="" />
                                <input type="text" placeholder="Email Address" value="" />
                                <textarea placeholder="Message"></textarea>
                                <button class="send">Send Application</button>
                            </form>
                        </div>

                    </div>
                    {{-- <a href="#" class="button dark"><i class="fa fa-star"></i> Bookmark This Resume</a> --}}


                </div>
            </div>

        </div>
    </div>


    <!-- Content
            ================================================== -->
    <div class="container">
        <!-- Recent Jobs -->
        <div class="eight columns">
            <div class="padding-right">

                <h3 class="margin-bottom-15">About Me</h3>

                <p class="margin-reset">
                    {{ trim($user->userable->description) }}
                </p>

                <br>

                <p>The <strong>Food Service Specialist</strong> will have responsibilities that include:</p>

                <ul class="list-1">
                    <li>Excellent customer service skills, communication skills, and a happy, smiling attitude are
                        essential.</li>
                    <li>Must be available to work required shifts including weekends, evenings and holidays.</li>
                    <li>Must be able to perform repeated bending, standing and reaching.</li>
                    <li>Must be able to occasionally lift up to 50 pounds</li>
                </ul>

            </div>
        </div>


        <!-- Widgets -->
        <div class="eight columns">

            <h3 class="margin-bottom-20">Education</h3>

            <!-- Resume Table -->
            <dl class="resume-table">
                @foreach ($user->userable->experiences as $experience)
                    <dt style="font-weight:bold;text-align:center;font-size:1.4em;">
                        <small class="date">{{ $experience->start_at }} To @if ($experience->end_at == null || $experience->end_at == now())
                                Now
                            @else
                                {{ $experience->end_at }}
                            @endif
                        </small>
                        <hr> <strong>{{ $experience->company }}</strong>
                    </dt>
                    <dd style="text-align:center;">
                        <p>{{ $experience->job_title }}</p>
                        {{-- <p>Captain, why are we out here chasing comets? Maybe we better talk out here; the observation lounge has turned into a swamp. Ensign Babyface!</p> --}}
                    </dd>
                    <br>
                @endforeach




            </dl>

        </div>

    </div>
@endsection


@push('script')
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
