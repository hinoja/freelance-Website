
@php
use App\Models\User;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
@endphp
<x-mail::message>




        <h1>Hello,{{ $freelance->name  }}</h1>



        <h3>Letter to apply</h3>
      Thanks to apply the task that name is    {{$jobInfo->title }}   Price:{{$jobInfo->salary  }}
    This is at {{ $jobInfo->location }} and created by {{  (User::where('userable_id','=',$jobInfo->customer_id )->first())->name }}
    {{-- this job is in fact : {{$job->description  }} --}}

    posted  the {{ $jobInfo->created_at->format('d/m/Y') }} on your Apps

     The during of  this job the {{ $jobInfo->start_at  }} TO {{ $jobInfo->deadline }}



Thanks,<br>
<h5>no reply this message</h5>
{{ config('app.name') }}
</x-mail::message>
