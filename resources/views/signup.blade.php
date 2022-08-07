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

<section class="order-form py-5">
    <div class="container">
        <div>
            <ul>
                @foreach ($errors->all() as $error )
                   <div class="alert alert-danger"> <li> {{ $error }}</li> </div>
                @endforeach
            </ul>

        </div>
            @if (Session::has('success'))
                   <div class="alert alert-sucess">  {{ Session::get('success') }} </div>
            @endif

        <form action="{{ route('signup') }}" method="POST">
            @csrf
            @method('post')
            <div class="row">
                <div class="col-md-6 col-sm">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text"  class="form-control" name="name" value="{{ old('name')}}" placeholder="Votre nom complet" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                        <input type="email" name="email" value="{{ old('email')}}" class="form-control" placeholder="Votre adresse email" />
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-utensils"></i></label>
                        <select class="form-select" id="inputGroupSelect01" name="role_id">
                                 Type compte
                                {{-- <option disable class="text-muted"></option> --}}
                           @foreach(Role::all() as $val)
                                <option value="{{ $val->id }}">{{ $val->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-sm mt-3">
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="password" />
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    {{-- <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="confirm password" />
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div> --}}

                </div>
                <div class="form-row">
                    <input type="submit" class="button" name="" value="inscrire" />
                    <ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				    </ul>
                </div>
            </div>
        </form>
    </div>
</section>


@endsection
