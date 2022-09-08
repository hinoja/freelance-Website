<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>

<!-- Font awesome cdn CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
<link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet" />


<!-- CSS
================================================== -->
<link href="{{ asset('Assets/css/style.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('Assets/css/colors/green.css') }}" id="colors"/>

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
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
                    <div class="alert alert-success">
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
                    </div>
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


<!-- Scripts
================================================== -->
  @yield('script')

</body>
</html>
