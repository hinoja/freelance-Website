
@php
    use App\Models\User;
    use App\Models\Job;
    use Illuminate\Support\Facades\Auth;
@endphp
<x-mail::message>
 <h1>Hello, {{  (User::where('userable_id','=',$jobInfo->customer_id )->first())->name }}</h1>
 My full Name is {{ $name }}.
 I would like offer to do you  work because: {{ $message }}

 <x-mail::panel background-color="success">
      You have someone who propose to do your work named  {{ $jobInfo->title }}  <br>
        That you had posted the  {{$jobInfo->created_at->format('d m Y')  }}
      <br>
      {{-- His/her name is  {{ $freelance->name  }} --}}
</x-mail::panel>

<x-mail::button :url="'http:://http://127.0.0.1:8000/'">
   View his profile
</x-mail::button>
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
