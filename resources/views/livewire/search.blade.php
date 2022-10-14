@php
   use App\Models\Status;
   use App\Models\Category;
@endphp

<div class="list-search">
    <button wire:loading.disabled wire:click="searchJob">
        <i wire:loading.remove class="fa fa-search"></i>
        <div wire:loading class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
    </button>
    <input type="text" placeholder="job title, keywords or company name"  wire:model.defer="query"/>
    <div class="clearfix"></div>
    <ul class="job-list full">
        @if ($message)
            <li>
                <div class="search-info">{{ $message }}</div>
            </li>
        @endif

        @foreach ($jobs as $job )
            <li><a href="{{ route('job.show',$job->slug) }}">
                <img src="{{ asset('Assets/images/job-list-logo-01.png') }}" alt="">
                <div class="job-list-content">
                    <h4> {{ (Category::find( $job->category_id))->name }}   / {{ $job->title }}
                        @if ((Status::find( $job->status_id))->id === 1)
                            <span   class="part-time">  {{ (Status::find( $job->status_id))->name }} </span></h4>
                        @elseif ((Status::find( $job->status_id))->id == 2)
                            <span style="background-color: red">  {{ (Status::find( $job->status_id))->name }} </span></h4>
                        @elseif ((Status::find( $job->status_id))->id==3)
                            <span class="full-time">  {{ (Status::find( $job->status_id))->name }} </span></h4>
                        @elseif ((Status::find( $job->status_id))->id ==4)
                            <span class="internship"> {{ (Status::find( $job->status_id))->name }} </span></h4>
                        @elseif ((Status::find( $job->status_id))->id==5)
                            <span class="temporary">  {{ (Status::find( $job->status_id))->name }} </span></h4>
                        @else
                            <span class="full-time">  {{ (Status::find( $job->status_id))->name }} </span></h4>
                        @endif

                        {{-- <span class="full-time">  {{ (Status::find( $job->type))->name }} </span></h4> --}}
                    <div class="job-icons">
                        <span><i class="fa fa-briefcase"></i> King</span>
                        <span><i class="fa fa-map-marker"></i> {{ $job->location }} </span>
                        <span><i class="fa fa-money"></i> $100 / hour  {{ $job->salary }}/ hour</span>
                    </div>
                    {{-- <p> {{  $job->description  }}</p> --}}
                </div>
                </a>
                <div class="clearfix"></div>
            </li>
        @endforeach
        
    </ul>
</div>
