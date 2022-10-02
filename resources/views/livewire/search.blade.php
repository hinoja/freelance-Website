@php
   use App\Models\Status;
   use App\Models\Category;
@endphp
<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <form action="#" class="list-search">
               <button><i class="fa fa-search"></i></button>
               <input type="text" placeholder="job title, keywords or company name"  wire:model.debounce="query"/>
               <div class="clearfix"></div>

               {{-- @livewire('jobs-pagination') --}}
         @if(count($ResultJob) >0 && !empty($query))
            <ul class="job-list full">

                @foreach ($ResultJob as $items )
                    <li><a href="{{ route('job.show',$items->slug) }}">
                        <img src="{{ asset('Assets/images/job-list-logo-01.png') }}" alt="">
                        <div class="job-list-content">
                            <h4> {{ (Category::find( $items->category_id))->name }}   / {{ $items->title }}
                                @if ((Status::find( $items->status_id))->id === 1)
                                    <span   class="part-time">  {{ (Status::find( $items->status_id))->name }} </span></h4>
                                @elseif ((Status::find( $items->status_id))->id==3)
                                    <span class="full-time">  {{ (Status::find( $items->status_id))->name }} </span></h4>
                                @elseif ((Status::find( $items->status_id))->id ==4)
                                    <span class="internship"> {{ (Status::find( $items->status_id))->name }} </span></h4>
                                @elseif ((Status::find( $items->status_id))->id==5)
                                    <span class="temporary">  {{ (Status::find( $items->status_id))->name }} </span></h4>
                                @else
                                    <span class="full-time">  {{ (Status::find( $items->status_id))->name }} </span></h4>
                                @endif

                                {{-- <span class="full-time">  {{ (Status::find( $items->type))->name }} </span></h4> --}}
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
         @elseif(count($ResultJob) == 0 && !empty($query) )
         <ul class="job-list full">
            <li >
                <div class="alert alert-primary mt-3">
                    No matching to "{{ $query }} "
                </div>

            </li>

         </ul>
         @elseif ( empty($query))
                @livewire('jobs-pagination')
        @endif
    </form>

    {{-- @livewire('jobs-pagination') --}}


</div>
