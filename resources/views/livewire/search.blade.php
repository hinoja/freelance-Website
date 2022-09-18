@php

   use App\Models\Status;
   use App\Models\Category;
@endphp
<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <form action="#" method="get" class="list-search">
        <button><i class="fa fa-search"></i></button>
        <input type="text" placeholder="job title, keywords or company name"  wire:model="query"/>
        <div class="clearfix"></div>
        @if(count($job) > 0)
              
                <ul class="job-list full">
                   
                    @foreach ($job as $items )
                        <li><a href="{{ route('job.show',$items->id) }}">
                            <img src="{{ asset('Assets/images/job-list-logo-01.png') }}" alt="">
                            <div class="job-list-content">
                                <h4> {{ (Category::find( $items->category_id))->name }}   / {{ $items->title }}
                                    @if ((Status::find( $items->type))->id === 1)
                                        <span   class="part-time">  {{ (Status::find( $items->type))->name }} </span></h4>
                                    @elseif ((Status::find( $items->type))->id==3)
                                        <span class="full-time">  {{ (Status::find( $items->type))->name }} </span></h4>
                                    @elseif ((Status::find( $items->type))->id ==4)
                                        <span class="internship"> {{ (Status::find( $items->type))->name }} </span></h4>
                                    @elseif ((Status::find( $items->type))->id==5)
                                        <span class="temporary">  {{ (Status::find( $items->type))->name }} </span></h4>
                                    @else
                                        <span class="full-time">  {{ (Status::find( $items->type))->name }} </span></h4>
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
        @endif
    </form>


</div>
