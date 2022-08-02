
@php
    use Illuminate\Support\Facades\Auth;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: blue;">
    <h1 style="color: green"> Hello</h1>
    <h2> You're Connected</h2>
    <h3>Welcome ! </h3>


        @if (Session::has('success'))
             {{ Session::get('success') }}
        @endif
    <div>

         <h5 style="color: purple"> <a href="{{ route('logout') }}">se deconnecter</a> </h5>
    </div>

</body>
</html>
