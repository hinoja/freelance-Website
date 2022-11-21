@extends('layouts.app')
@section('content')


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">
		<div class="sixteen columns">
			<h2 class="text-center text-uppercase">Connexion</h2>
		</div>
	</div>
</div>


<section class="order-form py-5">
    <div class="container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            @method('post')
            <div class="row">
                <div class="col-md-12 col-sm ">
                    <div class="input-group mb-3">
						<span class="input-group-text"><i class="fas fa-at"></i></span>
                        <input type="email" class="form-control text-center"   name="email" placeholder="Votre adresse email" value="{{ old("email") }}" required/>
                    </div>
                    <div class="input-group mb-3">
						<span class="input-group-text "><i class="fas fa-key"></i></span>
                        <input type="password" class="form-control text-center" name="password" placeholder="Mot de passe" required />
                    </div>

                        <div class="input-group mb-3 row offset-lg-6">
                            <button class="btn btn-success " type="submit" class="">Connexion</button>
                        </div>


                </div>
            </div>
        </form>
    </div>
</section>


@endsection

@section('connexion')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
        <link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet" />
@endsection
