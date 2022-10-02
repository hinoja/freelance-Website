
@php
  use App\Models\Tag;
  use App\Models\Requirement;
  use App\Models\Status;
  use App\Models\Category;
@endphp
@extends('layouts.app')
    @section('content')

            <!-- Titlebar
            ================================================== -->
            <div id="titlebar" class="single submit-page">
                <div class="container">

                    <div class="sixteen columns">
                        <h2><i class="fa fa-plus-circle"></i> Add Job</h2>
                    </div>

                </div>
            </div>


            <!-- Content
            ================================================== -->
            <div class="container">

                <!-- Submit Page -->
                <div class="sixteen columns">
                    <div class="submit-page">

                        <!-- Notice -->
                        <div class="notification notice closeable margin-bottom-40">
                            <p><span>Have an account?</span> If you don’t have an account you can create one below by entering your email address. A password will be automatically emailed to you.</p>
                        </div>
                          <div class="text-center">
                            @foreach ($errors->all() as $error )
                                <div class="alert alert-danger">
                                        {{ $error }}
                                </div>
                            @endforeach

                          </div>
                        <form action="{{ route('job.add') }}" method="post">
                            @csrf

                                <!-- Title -->
                                <div class="form">
                                    <h5>Job Title</h5>
                                    <input class="search-field" name="title" required type="text" placeholder="" value="{{ old('title') }}"/>
                                </div>

                                <!-- Location -->
                                <div class="form">
                                    <h5>Location <span>(optional)</span></h5>
                                    <input required class="search-field" name="location" value="{{ old('location') }}" type="text" placeholder="e.g. London" />
                                    <p class="note">Leave this blank if the location is not important</p>
                                </div>

                                <!-- Job Type -->
                                <div class="form">
                                    <h5>Job Type</h5>
                                    <select data-placeholder="Full-Time" name="status_id"  class="chosen-select-no-single">
                                        @foreach (Status::all() as $status )
                                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                 <!-- Requirements -->
                                 <div class="form">
                                    <h5>Requirements</h5>
                                    <div class="form with-line">
                                           <h5>Requirement(s)  {{-- <span style="color: red">(*)</span>--}}</h5>
                                           <div class="form-inside">
                                               @if (old('requirements'))
                                                   @for ($i=0; $i < count(array_filter(old('requirements'))) ; $i++)
                                                       <div class="form boxed url-box">
                                                           <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                                                       {{-- <input class="search-field" name="name_url[]" type="text" value="{{ old('name_url')[$i]}}"/>--}}
                                                       <input class="search-field" name="requirements[]" value="{{ old('requirements')[$i] }}" type="text" placeholder="e.g. PHP, Social Media, Management"/>
                                                       </div>
                                                   @endfor
                                               @endif
                                               <!-- Adding Requirements(s)-->
                                               <div class="form boxed box-to-clone url-box">
                                                   <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                                                   <input class="search-field" name="requirements[]"  type="text" placeholder="e.g. PHP, Social Media, Management"/>
                                                   {{-- <input class="search-field" type="url" placeholder="http://" name="url[]" value=""/>--}}
                                               </div>

                                               <a href="#" class="button gray add-url add-box"><i class="fa fa-plus-circle"></i> Add Requirement</a>
                                               {{-- <p class="note">Optionally provide links to any of your websites or social network profiles.</p>---}}
                                           </div>
                                       </div>
                                </div>


                                <!-- Choose Category -->
                                <div class="form">
                                    <div class="select">
                                        <h5>Category</h5>
                                        <select data-placeholder="Choose Categories" class="chosen-select" name="category" >
                                            @foreach (Category::all() as $category )
                                              @if (old('category') == $category->id)
                                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                                              @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                              @endif

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- Tags -->
                                <div class="form">
                                    <h5>Job Tags </h5>
                                    <select data-placeholder="Choose Categories" multiple class="chosen-select" name="tag[]" >
                                        @foreach (Tag::all() as $tag )
                                            <option value="{{ $tag->id }}" {{ in_array($tag->id,old("tag") ?: []) ? "selected" : "" }}>  {{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                    <p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
                                </div>
                           </div>


                            <!-- Description -->
                            <div class="form">
                                <h5>Description</h5>
                                    <textarea required class="WYSIWYG" name="summary" value={{old('summary')}} cols="40" rows="3" id="summary" spellcheck="true"> {{old('summary')}} </textarea>

                            </div>

                            <!-- Application email/url -->
                            <div class="form">
                                    <h5> Salary</h5>
                                    <input type="number" required name="salary" value="{{ old('salary') }}" min="0" placeholder=" Salary  ($Fcfa) ">
                            </div>
                            <!-- TStarting Date -->
                            <div class="form">
                            <h5>Opening Date <span></span></h5>

                                <input data-role="date" value="{{ old('openingDate') }}" name="openingDate" type="date" placeholder="yyyy-mm-dd">
                                <p class="note">Start for new applicants.</p>
                            </div>

                            <!-- TClosing Date -->
                            <div class="form">
                                    <h5>Closing Date </h5>
                                        <input data-role="date" value="{{ old('closingDate') }}" name="closingDate" type="date" placeholder="yyyy-mm-dd">
                                        <p class="note">Deadline for new applicants.</p>
                            </div>



                                <!-- Company Details -->
                                <div class="divider"><h3>Company Details</h3></div>

                                <!-- Company Name -->
                                <div class="form">
                                    <h5>Company Name</h5>
                                    <input type="text" name="company_name" value="{{ old('company_name') }}" placeholder="Enter the name of the company">
                                </div>

                                <!-- Website -->
                                {{-- <div class="form">
                                    <h5>Website <span>(optional)</span></h5>
                                    <input type="text" placeholder="http://">
                                </div> --}}

                                <!-- Teagline -->
                                <div class="form">
                                    <h5>Tagline <span>(optional)</span></h5>
                                    <input type="text" name="company_description" value="{{ old('company_description') }}" placeholder="Briefly describe your company">
                                </div>

                                {{-- <!-- Video -->
                                <div class="form">
                                    <h5>Video <span>(optional)</span></h5>
                                    <input type="text" placeholder="A link to a video about your company">
                                </div>

                                <!-- Twitter -->
                                <div class="form">
                                    <h5>Twitter Username <span>(optional)</span></h5>
                                    <input type="text" placeholder="@yourcompany">
                                </div>

                                <!-- Logo -->
                                <div class="form">
                                    <h5>Logo <span>(optional)</span></h5>
                                    <label class="upload-btn">
                                        <input type="file" multiple />
                                        <i class="fa fa-upload"></i> Browse
                                    </label>
                                    <span class="fake-input">No file selected</span>
                                </div> --}}
                                <div class="divider margin-top-0"></div>

                                         <button class="button big margin-top-5" type="submit">Preview <i class="fa fa-arrow-circle-right"></i></button>

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
            <!-- WYSIWYG Editor -->
            <script type="text/javascript" src="{{ asset('Assets/scripts/jquery.sceditor.bbcode.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('Assets/scripts/jquery.sceditor.js') }}"></script>

    @endsection

{{--
<!-- Scripts
================================================== -->
<script src="scripts/jquery-2.1.3.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.themepunch.tools.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/stacktable.js"></script>


<!-- WYSIWYG Editor -->
<script type="text/javascript" src="scripts/jquery.sceditor.bbcode.min.js"></script>
<script type="text/javascript" src="scripts/jquery.sceditor.js"></script>
 --}}
