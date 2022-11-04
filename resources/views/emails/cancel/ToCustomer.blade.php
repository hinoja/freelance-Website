{{-- <x-mail::message>
    Hello {{ $customer->name }}



    {{ $freelance->name }} send his/her cancel to do this Job
    <x-mail::button :url="{{ route('welcome') }}" color="success">
        See his/her profile
    </x-mail::button>


    <x-mail::panel :url="$url" color="success">
        TASK
        Name : {{ $job->title }}
        Location : {{ $job->location }}
        Description : {{ $job->description }}
        Salary : {{ $job->salary }} Fcfa


    </x-mail::panel>
    thanks ,<br>
    {{ config('app.name') }}


</x-mail::message> --}}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cancel Apply Confirmation</title>
</head>
<body>
	   	   <h1 style="color: rgb(23, 208, 221)">Hello {{$customer->name  }} </h1>
	<br> <br>
    <h2>TASK : Cancel Apply Confirmation </h2>
	    <div >
			<figure>
				 <img src="{{ asset('Assets/images/laravel.png') }}" alt="laravel" height="30%" width="60%">
			</figure>
		</div>
	   	<div style="font-size: 2em;background-color:rgb(120, 220, 235);">
					Name :  <strong>{{ $job->title }}</strong>   <br>
					Location : <strong> {{ $job->location }}</strong> <br>

					{{-- Description : {{ $job->description }}  --}}
					Salary :  <strong>{{ $job->salary }} Fcfa</strong>  <br>
					Deadline :  <strong>{{ $job->deadline }}  </strong>  <br>
			</div>

				 <div style="color: green; background-color:red"   >
					    <a href="{{ route('freelance.profile.view') }}">See List of Profile </a>
				 </div>

</body>
</html>