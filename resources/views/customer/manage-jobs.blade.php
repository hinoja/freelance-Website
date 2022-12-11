@php
    use App\Models\Category;
@endphp

@extends('layouts.app')
@section('content')
    <!-- Titlebar
        ================================================== -->
    <div id="titlebar" class="single">
        <div class="container">
            <div class="sixteen columns">
                <h2>Manage Jobs</h2>
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="{{ route('job.manage') }}">Job Dashboard</a></li>
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

            <p class="margin-bottom-25">Your listings are shown in the table below. Expired listings will be automatically
                removed after 30 days.</p>


            @livewire('manage-resume-job')

            <br>
            <a href="{{ route('job.index') }}" class="button">Add Job</a>

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
    <!-- WYSIWYG Editor -->
    <script type="text/javascript" src="{{ asset('Assets/scripts/jquery.sceditor.bbcode.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Assets/scripts/jquery.sceditor.js') }}"></script>
@endpush
