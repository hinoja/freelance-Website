
@php
use App\Models\Status;
@endphp


<div>
<ul class="job-list full">

    @foreach ($job as $items )
           <li><a href="{{ route('job.show',$items->slug) }}">
               <img src="{{ asset('Assets/images/job-list-logo-01.png') }}" alt="">
               <div class="job-list-content">
                   <h4>  {{ $job->category->name }}  / {{ $items->title }}
                       @if ($job->status_id === 1)
                           <span   class="part-time">  {{ (Status::find( $items->status_id))->name }} </span></h4>
                       @elseif ($job->status_id === 2)
                           <span style="background-color: red">  {{ (Status::find( $items->status_id))->name }} </span></h4>
                       @elseif ($job->status_id === 3)
                           <span class="full-time">  {{ (Status::find( $items->status_id))->name }} </span></h4>
                       @elseif ($job->status_id === 4)
                           <span class="internship"> {{ (Status::find( $items->status_id))->name }} </span></h4>
                       @elseif ($job->status_id === 5)
                           <span class="temporary">  {{ (Status::find( $items->status_id))->name }} </span></h4>
                       @else
                           <span class="full-time">  {{ (Status::find( $items->status_id))->name }} </span></h4>
                       @endif

                       {{-- <span class="full-time">  {{ (Status::find( $items->status_id))->name }} </span></h4> --}}
                   <div class="job-icons">
                       <span><i class="fa fa-briefcase"></i> King</span>
                       <span><i class="fa fa-map-marker"></i> {{ $items->location }} </span>
                       <span><i class="fa fa-money"></i> $100 / hour  {{ $items->salary }}/ hour</span>
                   </div>
                   {{-- <p> {{  $items->description  }}</p> --}}
               </div>
               </a>
               <div class="clearfix"></div>
           </li>


    @endforeach

</ul>
<div class="clearfix"></div>

<div class="pagination-container">
     <nav class="pagination">
         <ul>
            <li> {{ $job->links() }} </li>
         </ul>
     </nav>
 </div>
</div>
