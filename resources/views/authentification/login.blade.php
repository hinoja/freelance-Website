@extends('layouts.app')
@section('content')
    <!-- Titlebar
            ================================================== -->
    {{-- <div id="titlebar" class="single">
	<div class="container">
		<div class="sixteen columns">
			<h2 class="text-center text-uppercase">Connexion</h2>
		</div>
	</div>
</div> --}}

    <div id="titlebar" class="single">
        <div class="container">

            <div class="sixteen columns">
                <h2>LogIn</h2>
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">Home</a></li>
                        <li>LogIn</li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>

    {{-- <section class="order-form py-5">
    <div class="container"> --}}
    {{-- <form action="{{ route('login') }}" method="POST">
            @csrf
            @method('post')

            <div class="row">
                <div class="col-md-12 col-sm ">
                    <div class="input-group mb-3 w-300">
						<span class="input-group-text"><i class="fas fa-at"></i></span>
                        <input type="email" class="form-control text-center"   name="email" placeholder="Votre adresse email" value="{{ old("email") }}" required/>
                    </div>
                    <div class="input-group mb-3">
						<span class="input-group-text "><i class="fas fa-key"></i></span>
                        <input type="password" class="form-control text-center" name="password" placeholder="Mot de passe" required />
                    </div>

                    <div class="input-group mb-3 offset-lg-6">
                        <button class="btn btn-success" type="submit" >Connexion</button>
                    </div>
                </div>
            </div>
        </form> --}}
    <div class="login-page">
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3>LOGIN</h3>
                    <p>Please enter your credentials to login.</p>
                </div>
            </div>
            <form class="login-form" action="{{ route('login') }}" method="POST">

                @csrf
                @method('post')

                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                    <input type="email" class=" text-center form-control" name="email" placeholder="adresse email"
                        value="{{ old('email') }}" required /> <br>
                    {{-- @error('email')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror --}}
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text "><i class="fas fa-key"></i></span>
                    <input type="password" class="text-center form-control" name="password" placeholder="password" /> <br>
                    {{-- @error('password')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror --}}
                </div>

                <div class="input-group mb-3 offset-lg-5">
                    <button class="button mod-button" type="submit">login</button>
                </div>

                <p class="message"><a href="#">Forget Password ?</a></p>
            </form>
        </div>
    </div>
    </div>
    {{-- </section> --}}
@endsection


@push('connexion')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Assets/css/style.css') }}" rel="stylesheet" />
@endpush
@push('script')
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
@endpush
