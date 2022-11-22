
@php
    use App\Models\Category;
@endphp

<div>

    <table class="manage-table responsive-table">

        <tr>
            <th><i class="fa fa-file-text"></i> Title</th>
            <th><i class="fa fa-check-square-o"></i> Filled?</th>
            <th><i class="fa fa-calendar"></i> Date Posted</th>
            <th><i class="fa fa-calendar"></i> Date Expires</th>
            <th><i class="fa fa-user"></i> Applications</th>
            <th></th>
        </tr>

        @foreach ($jobs as $job )
            <tr>
                <td class="title"><a href="{{ route('job.show',$job) }}"> {{ (Category::find( $job->category_id))->name }}  , {{ $job->title   }}</a></td>
                <td class="centered">
                    {{-- @if ( freelance_job::Where('job_id',$job->id)->Where('is_hired',1)->first()) --}}
                    @if (!empty($job->end_at))
                        <i class="fa fa-check-square-o" style="color: green;font-size:1.5em"> </i>
                     @endif
                </td>
                <td> {{ $job->created_at->format('Y-m-d') }}</td>
                <td>{{ $job->deadline}}</td>
                <td class="centered"><a href="{{ route('job.applier',$job) }}" class="button">Show ({{ (count($job->freelances)) }})</a></td>
                <td class="action">

                    @if (!empty($job->end_at)  )
                        <a href="{{ route('job.customer.cancel',$job) }}"><i class="fa  fa-square "></i> Cancel </a>
                    @elseif(empty($job->end_at) )
                        <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                        {{-- <a href="#"><i class="fa  fa-eye-slash"></i> Do</a> --}}
                        <a href="{{ route('job.finish',$job) }}"><i class="fa  fa-check "></i> Mark Finish</a>
                        {{-- <form action="{{ route('job.delete',$job) }}" method="get"> --}}
                            {{-- @csrf --}}
                            {{-- @method('delete') --}}
                            {{-- <input type="submit" > --}}
                            {{-- <input type="button" value=""> --}}
                            <a href="{{ route('job.delete',$job) }}" class="delete "><i class="fa fa-remove"></i> Delete</a>
                        {{-- </form> --}}

                    @endif
                </td>
            </tr>
        @endforeach

        <div class="clearfix"></div>

                <div class="pagination-container">
                    <nav class="pagination">
                        <ul>
                            <li> {{ $jobs->links() }} </li>
                        </ul>
                    </nav>
                </div>

    </table>






</div>
