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
                        <input type="email" class="form-control text-center" name="email" placeholder="Votre adresse email" />
                    </div>
                    <div class="input-group mb-3">
						<span class="input-group-text "><i class="fas fa-key"></i></span>
                        <input type="password" class="form-control text-center" name="password" placeholder="Mot de passe" />
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

