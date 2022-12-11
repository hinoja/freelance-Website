@extends('layouts.app')

@section('content')
    {{-- <div id="titlebar" class="single">
	<div class="container">
		<div class="sixteen columns">
			<h2 class="text-center text-uppercase riweather text-dark">Creer un compte</h2>
		</div>
	</div>
</div> --}}

    <div id="titlebar" class="single">
        <div class="container">

            <div class="sixteen columns">
                <h2>SIGNUP</h2>
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">Home</a></li>
                        <li>SignUp</li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>

    <section class="order-form py-5 container signup-page">
        <div class="row">
            <div class="col-lg-3 col-md-3"></div>
            <div class="container form-signup txt-center col-lg-6 col-md-3">

                {{-- @if (Session::has('success'))
                    <div class="alert alert-sucess"> {{ Session::get('success') }} </div>
                @endif --}}
                <div class="login">
                    <div class="login-header">
                        <h3>SIGNUP</h3>
                        <p>Please enter your credentials to SignUp.</p>
                    </div>
                </div>
                <form action="{{ route('signup') }}" method="POST">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control text-center" name="name"
                                    value="{{ old('name') }}" placeholder="Votre nom complet" /> <br>
                                {{-- @error('name')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror --}}
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control text-center" placeholder="Votre adresse email" /> <br>
                                {{-- @error('email')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror --}}
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class='fas fa-wrench'></i></span>
                                <select class="form-select text-center form-control" id="inputGroupSelect01" name="role_id">
                                    <option selected>Type compte</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select> <br>
                                {{-- @error('role_id')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror --}}
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input type="password" class="form-control text-center" name="password"
                                    placeholder="password" /> <br>
                                {{-- @error('password')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror --}}
                            </div>
                            <div class="input-group mb-3">
                                <input type="submit" class="button btn btn-success offset-lg-5" name=""
                                    value="inscrire" />
                            </div>

                            <div class="input-group">
                                <p class="message">SignUp With Social ></p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ route('SocialRedirect', 'google') }}"><i
                                        class="bi bi-google"></i></a>&nbsp;&nbsp;{{-- google --}}
                                {{-- <li><a class="google" href="#"><i class="icon-google"></i></a></li> --}}
                                <a href="href="{{ route('SocialRedirect', 'github') }}"><i class="bi-github"
                                        role="img" aria-label="GitHub"></i></a>&nbsp;&nbsp;{{-- github --}}
                                <a href="#"><i class="bi bi-twitter"></i></a>&nbsp;&nbsp;
                                <a href="#"><i class="bi bi-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-md-3"></div>
        </div>

    </section>
@endsection
@push('connexion')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet" />
@endpush
