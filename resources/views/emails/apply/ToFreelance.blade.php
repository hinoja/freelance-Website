{{-- <x-mail::message>
	Hello {{$freelance->name  }}
	It is a confirmation mail  for  your apply to 

		   TASK
			Name : {{ $job->title }}
		  Location   : {{ $job->location }} 
			Description : {{ $job->description }} 
		   Salary  : {{ $job->salary }} Fcfa

	<x-mail::button :url="{{ route('welcome') }}" color="success">
				  Review  anothers jobs
	</x-mail::button>


	<x-mail::panel :url="$url" color="primary">
			 
		Created by {{ $customer->name  }}
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
	<title> Apply Confirmation</title>
</head>
<body>
	   <h1 style="color: rgb(23, 208, 221)">Hello {{$freelance->name  }} </h1>
	<br> <br>
    <h2>TASK </h2>
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

				 <div style="color: green" style="">
					    <a href="{{ route('job.show',$job->slug) }}">Review List of Jobs </a>
				 </div>

</body>
</html>