@php
    use App\Models\Role;
    use Illuminate\Support\Facades\Session;
@endphp

@extends('layouts.app')


@section('content')


<div id="titlebar" class="single">
	<div class="container">
		<div class="sixteen columns">
			<h2 class="text-center text-uppercase riweather text-dark">Creer un compte</h2>
		</div>
	</div>
</div>

<section class="order-form py-5 container">
  <div class="row">
    <div class="col-lg-3 col-md-3"></div>
    <div class="container" class="txt-center col-lg-6 col-md-3">

            @if (Session::has('success'))
                   <div class="alert alert-sucess">  {{ Session::get('success') }} </div>
            @endif

        <form action="{{ route('signup') }}" method="POST">
            @csrf
            @method('post')
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text"  class="form-control text-center" name="name" value="{{ old('name')}}" placeholder="Votre nom complet" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                        <input type="email" name="email" value="{{ old('email')}}" class="form-control text-center" placeholder="Votre adresse email" />
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-utensils"></i></span>
                        <select class="form-select text-center" id="inputGroupSelect01" name="role_id" >
                                     <option selected>Type compte</option>
                                @foreach(Role::all() as $val)
                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                        <input type="password"  class="form-control text-center" name="password"  placeholder="password" />
                    </div>

                    <div class="form-row ">
                        <input type="submit" class="button btn btn-success offset-lg-5" name="" value="inscrire" />
                        <ul class="social-icons">
                        <li><a class="facebook" href="{{ route('SocialRedirect','google') }}"><i class="icon-facebook"></i></a></li>{{-- google --}}
                        {{-- <li><a class="google" href="#"><i class="icon-google"></i></a></li> --}}
                        <li><a class="twitter" href="href="{{ route('SocialRedirect','github') }}"><i class="icon-twitter"></i></a></li>{{-- github --}}
                        <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-3 col-md-3"></div>
  </div>
</section>


@endsection
