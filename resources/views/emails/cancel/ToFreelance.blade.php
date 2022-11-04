{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Your Cancel to job </title>
</head>
<body>
	  	   <h1 style="color: rgb(23, 208, 221)">Hello {{$customer->name  }} </h1>
	<br> <br>
    <h2>TASK Your  Cancel  Confirmation </h2>
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

				 <div style="color: green; background-color:red"  >
					    <a href="{{ route('job.index') }}">See List of Job </a>
				 </div>

</body>
</html>