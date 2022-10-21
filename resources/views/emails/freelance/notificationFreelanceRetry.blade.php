
@php
use App\Models\User;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
@endphp
<x-mail::message>




        <h1>Hello,{{ $customer->name  }}</h1>

            <h3>Letter to Retry</h3>

      Sorry to retry on your  apply on the  task  <h4 >{{$jobInfo->title }} <hr> that payment is :{{$jobInfo->salary  }}</h4>
    This Job is at  {{ $jobInfo->location }} and had  created by {{  (User::where('userable_id','=',$jobInfo->customer_id )->first())->name }}
    {{-- this job is in fact : {{$job->description  }} --}}

    posted  the {{ $jobInfo->created_at->format(' d m Y') }} on your Apps

     The during of  this job the {{ $jobInfo->start_at  }} TO {{ $jobInfo->deadline }}



Thanks,<br>
<h5>no reply this message</h5>
{{ config('app.name') }}
</x-mail::message>
