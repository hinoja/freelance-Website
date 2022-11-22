@php
    use App\Models\freelance_jobs;
@endphp
@extends('layouts.app')
@section('content')

        <!-- Titlebar
        ================================================== -->
        <div id="titlebar" class="single">
            <div class="container">

                <div class="sixteen columns">
                    <h2>Manage Applications</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li>You are here:</li>
                            <li><a href="#">Home</a></li>
                            <li>Job Dashboard</li>
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

                <p class="margin-bottom-25" style="float: left;">The job applications for <strong><a href="{{ route('job.show',$job) }}">{{ $job->title }}</a></strong> are listed below.</p>
                <strong><a href="{{ route('download.pdf',$job) }}" class="download-csv">Download CSV</a></strong>

            </div>


            <div class="eight columns">
                <!-- Select -->
                <select data-placeholder="Filter by status" class="chosen-select-no-single">
                    <option value="">Filter by status</option>
                    <option value="new">New</option>
                    <option value="interviewed">Interviewed</option>
                    <option value="offer">Offer extended</option>
                    <option value="hired">Hired</option>
                    <option value="archived">Archived</option>
                </select>
                <div class="margin-bottom-15"></div>
            </div>

            <div class="eight columns">
                <!-- Select -->
                <select data-placeholder="Newest first" class="chosen-select-no-single">
                    <option value="">Newest first</option>
                    <option value="name">Sort by name</option>
                    <option value="rating">Sort by rating</option>
                </select>
                <div class="margin-bottom-35"></div>
            </div>

            <!-- Applications -->
            <div class="sixteen columns">

                <!-- Application #1 -->
                @forelse ($job->freelances as $profile)
                    <div class="application">
                        <div class="app-content">

                            <!-- Name / Avatar -->
                            <div class="info">
                                <img src="{{ asset('Assets/images/resumes-list-avatar-01.png') }}" alt="alt">
                                <span>{{ $profile->user->name }}</span>
                                <ul>
                                    <li><a href="{{ route('freelance.profileCV.view',  $profile->user ) }}"><i class="fa fa-file-text"></i> Look CV</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> Contact</a></li>
                                </ul>
                            </div>

                            <!-- Buttons -->
                            <div class="buttons">
                                @if ( freelance_jobs::where('job_id',$job->id)->where('is_hired',1)->where('freelance_id',$profile->id)->first())
                                    <a href="{{ route('job.cancel.freelance',[$job,$profile]) }}"   class="button gray " style="color: white;background:green">  Cancel Selected </a>
                                @elseif( freelance_jobs::where('job_id',$job->id)->where('is_hired',0)->where('freelance_id',$profile->id)->first())
                                    <a href="{{ route('job.selected.freelance',[$job,$profile]) }}"  class="button gray "><i class="fa fa-pencil"></i> Selected</a>
                                @endif
                                <a href="#two-1" class="button gray app-link"><i class="fa fa-sticky-note"></i> Add Note</a>
                                <a href="#three-1" class="button gray app-link"><i class="fa fa-plus-circle"></i> Show Details</a>
                            </div>
                            <div class="clearfix"></div>

                        </div>

                        <!--  Hidden Tabs -->
                        <div class="app-tabs">

                            <a href="#" class="close-tab button gray"><i class="fa fa-close"></i></a>

                            <!-- First Tab -->
                            <div class="app-tab-content" id="one-1">

                                <div class="select-grid">
                                    <select data-placeholder="Application Status" class="chosen-select-no-single">
                                        <option value="">Application Status</option>
                                        <option value="new">New</option>
                                        <option value="interviewed">Interviewed</option>
                                        <option value="offer">Offer extended</option>
                                        <option value="hired">Hired</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                </div>

                                <div class="select-grid">
                                    <input type="number" min="1" max="5" placeholder="Rating (out of 5)">
                                </div>

                                <div class="clearfix"></div>
                                <a href="#" class="button margin-top-15">Save</a>
                                <a href="#" class="button gray margin-top-15 delete-application">Delete this application</a>

                            </div>

                            <!-- Second Tab -->
                            <div class="app-tab-content"  id="two-1">
                                <textarea placeholder="Private note regarding this application"></textarea>
                                <a href="#" class="button margin-top-15">Add Note</a>
                            </div>

                            <!-- Third Tab -->
                            <div class="app-tab-content"  id="three-1">
                                <i>Full Name:</i>
                                <span>{{ $profile->user->name }}</span>

                                <i>Email:</i>
                                <span><a href="mailto:john.doe@example.com">{{ $profile->user->email }}</a></span>

                                <i>Message:</i>
                                <span> {{!! $profile->description  !!}}   </span>
                            </div>

                        </div>

                        <!-- Footer -->
                        <div class="app-footer">

                            <div class="rating no-stars">
                                <div class="star-rating"></div>
                                <div class="star-bg"></div>
                            </div>

                            <ul>
                                <li><i class="fa fa-file-text-o"></i> New</li>
                                <li><i class="fa fa-calendar"></i> September 24, 2015</li>
                            </ul>
                            <div class="clearfix"></div>

                        </div>
                    </div>

                @empty

                @endforelse


                {{-- <!-- Application #2 -->
                <div class="application">
                    <div class="app-content">

                        <!-- Name / Avatar -->
                        <div class="info">
                            <img src="{{ asset('Assets/images/avatar-placeholder.png') }}" alt="alt">

                            <span><a href="#">Tom Smith</a></span>
                            <ul>
                                <li><a href="#"><i class="fa fa-file-text"></i> Download CV</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> Contact</a></li>
                            </ul>
                        </div>

                        <!-- Buttons -->
                        <div class="buttons">
                            <a href="#one-2" class="button gray app-link"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#two-2" class="button gray app-link"><i class="fa fa-sticky-note"></i> Add Note</a>
                            <a href="#three-2" class="button gray app-link"><i class="fa fa-plus-circle"></i> Show Details</a>
                        </div>
                        <div class="clearfix"></div>

                    </div>

                    <!--  Hidden Tabs -->
                    <div class="app-tabs">

                        <a href="#" class="close-tab button gray"><i class="fa fa-close"></i></a>

                        <!-- First Tab -->
                        <div class="app-tab-content" id="one-2">

                            <div class="select-grid">
                                <select data-placeholder="Application Status" class="chosen-select-no-single">
                                    <option value="">Application Status</option>
                                    <option value="new">New</option>
                                    <option value="interviewed">Interviewed</option>
                                    <option value="offer">Offer extended</option>
                                    <option value="hired">Hired</option>
                                    <option value="archived">Archived</option>
                                </select>
                            </div>

                            <div class="select-grid">
                                <input type="number" min="1" max="5" placeholder="Rating (out of 5)">
                            </div>

                            <div class="clearfix"></div>
                            <a href="#" class="button margin-top-15">Save</a>
                            <a href="#" class="button gray margin-top-15 delete-application">Delete this application</a>

                        </div>

                        <!-- Second Tab -->
                        <div class="app-tab-content"  id="two-2">
                            <textarea placeholder="Private note regarding this application"></textarea>
                            <a href="#" class="button margin-top-15">Add Note</a>
                        </div>

                        <!-- Third Tab -->
                        <div class="app-tab-content" id="three-2">
                            <i>Full Name:</i>
                            <span>Tom Smith</span>

                            <i>Email:</i>
                            <span><a href="mailto:tom.smith@example.com">tom.smith@example.com</a></span>

                            <i>Message:</i>
                            <span>Morbi non pharetra quam. Pellentesque eget massa dolor. Sed vitae placerat eros, quis aliquet purus. Donec feugiat sapien urna, at sagittis libero pellentesque in. Praesent efficitur dui eget condimentum viverra. Sed non maximus ipsum, non consequat nulla. Vivamus nec convallis nisi, sit amet egestas magna. Quisque vulputate lorem sit amet ornare efficitur. Duis aliquam est elit, sed tincidunt enim commodo sed. Fusce tempus magna id sagittis laoreet. Proin porta luctus ante eu ultrices. Sed porta consectetur purus, rutrum tincidunt magna dictum tempus. </span>
                        </div>

                    </div>

                    <!-- Footer -->
                    <div class="app-footer">

                        <div class="rating five-stars">
                            <div class="star-rating"></div>
                            <div class="star-bg"></div>
                        </div>

                        <ul>
                            <li><i class="fa fa-file-text-o"></i> Interviewed</li>
                            <li><i class="fa fa-calendar"></i> September 22, 2015</li>
                        </ul>
                        <div class="clearfix"></div>

                    </div>
                </div>


                <!-- Application #3 -->
                <div class="application">
                    <div class="app-content">

                        <!-- Name / Avatar -->
                        <div class="info">
                            <img src="{{ asset('Assets/images/avatar-placeholder.png') }}" alt="alt">
                            <span>Kathy Berry</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-file-text"></i> Download CV</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> Contact</a></li>
                            </ul>
                        </div>

                        <!-- Buttons -->
                        <div class="buttons">
                            <a href="#one-3" class="button gray app-link"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#two-3" class="button gray app-link"><i class="fa fa-sticky-note"></i> Add Note</a>
                            <a href="#three-3" class="button gray app-link"><i class="fa fa-plus-circle"></i> Show Details</a>
                        </div>
                        <div class="clearfix"></div>

                    </div>

                    <!--  Hidden Tabs -->
                    <div class="app-tabs">

                        <a href="#" class="close-tab button gray"><i class="fa fa-close"></i></a>

                        <!-- First Tab -->
                        <div class="app-tab-content" id="one-3">

                            <div class="select-grid">
                                <select data-placeholder="Application Status" class="chosen-select-no-single">
                                    <option value="">Application Status</option>
                                    <option value="new">New</option>
                                    <option value="interviewed">Interviewed</option>
                                    <option value="offer">Offer extended</option>
                                    <option value="hired">Hired</option>
                                    <option value="archived">Archived</option>
                                </select>
                            </div>

                            <div class="select-grid">
                                <input type="number" min="1" max="5" placeholder="Rating (out of 5)">
                            </div>

                            <div class="clearfix"></div>
                            <a href="#" class="button margin-top-15">Save</a>
                            <a href="#" class="button gray margin-top-15 delete-application">Delete this application</a>

                        </div>

                        <!-- Second Tab -->
                        <div class="app-tab-content"  id="two-3">
                            <textarea placeholder="Private note regarding this application"></textarea>
                            <a href="#" class="button margin-top-15">Add Note</a>
                        </div>

                        <!-- Third Tab -->
                        <div class="app-tab-content"  id="three-3">
                            <i>Full Name:</i>
                            <span>Kathy Berry</span>

                            <i>Email:</i>
                            <span><a href="mailto:kathy.berry@example.com">kathy.berry@example.com</a></span>
                        </div>

                    </div>

                    <!-- Footer -->
                    <div class="app-footer">

                        <div class="rating four-stars">
                            <div class="star-rating"></div>
                            <div class="star-bg"></div>
                        </div>

                        <ul>
                            <li><i class="fa fa-file-text-o"></i> Interviewed</li>
                            <li><i class="fa fa-calendar"></i> September 26, 2015</li>
                        </ul>
                        <div class="clearfix"></div>

                    </div>
                </div> --}}


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
@endsection

