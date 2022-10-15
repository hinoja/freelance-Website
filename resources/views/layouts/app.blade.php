
@php
use Brian2694\Toastr\Facades\Toastr;
@endphp
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>

<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<!-- Font awesome cdn CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->

@stack('css')

@yield('connexion')

<!-- CSS
================================================== -->
<link href="{{ asset('Assets/css/style.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('Assets/css/colors/green.css') }}" id="colors"/>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
@livewireStyles()
</head>

<body class="antialiased">
<div id="wrapper">


{{-- Header --}}
{{-- ================================================== --> --}}
<header>
<div class="container">
<div class="sixteen columns">

     @include('partials.naviguation')

</div>
</div>
</header>
<div class="container">
<div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
            @if (session('success'))
                {{-- <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @elseif (session('danger'))
                 <div class="alert alert-danger">
                    toastr('s')
                    {{ session('danger') }}
                </div>
                @elseif (session('primary'))
                 <div class="alert alert-primary">
                    {{ session('primary') }}
                </div> --}}
            @endif
            {{-- <ul>
                @foreach ($errors->all() as $error )
                    <div class="alert alert-danger"> <li> {{ $error }}</li> </div>
                @endforeach

            </ul> --}}
        </div>
    <div class="col-md-3"></div>

</div>
</div>



       @yield('content')


<!-- Footer
================================================== -->
<div class="margin-top-15"></div>

@include('partials.footer')


<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

<!-- Scripts
================================================== -->
@yield('script')
@livewireScripts()
{{--
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
<!-- WYSIWYG Editor -->
<script type="text/javascript" src="{{ asset('Assets/scripts/jquery.sceditor.bbcode.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Assets/scripts/jquery.sceditor.js') }}"></script> --}}

</body>
</html>
