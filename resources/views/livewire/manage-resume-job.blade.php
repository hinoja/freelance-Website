@php
    use App\Models\freelance_jobs;
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

        @foreach ($jobs as $job)
            <tr>
                <td class="title"><a href="{{ route('job.show', $job) }}">
                        {{ $job->category->name }} , {{ $job->title }} @if (!empty($job->start_at) && empty($job->end_at))  <br>
                            <div
                                style="color:green;font-weight:bold;padding:0px;margin:0px;font-size:1.2em;">
                                In Progress...</div>
                        @endif
                    </a></td>
                <td class="centered">
                    {{-- @if (freelance_job::Where('job_id', $job->id)->Where('is_hired', 1)->first()) --}}
                    @if (!empty($job->end_at))
                        <i class="fa fa-check-square-o" style="color: green;font-size:1.5em"> </i>
                    @endif
                </td>
                <td> {{ $job->created_at->format('Y-m-d') }}</td>
                <td>{{ $job->deadline }}</td>
                @if (count($job->freelances) >0)
                    <td class="centered"><a href="{{ route('job.applier', $job) }}" class="button">Show
                        ({{ count($job->freelances) }})
                    </a></td>
                @else
                    <td class="centered"><a href="#" style="background-color: gray;"  class="button"><span class="button">Show</span></td></a>
                @endif

                <td class="action">
                     @if (empty($job->end_at))
                     <form action="{{ route('job.delete', $job) }}" method="POST" style="display: initial">
                        <style>
                            button:hover {
                                color: red;
                            }
                        </style>
                        @csrf
                        @method('delete')
                        <button style="background: white;color:rgb(97, 95, 95);text-transform:inherit;" type="submit"
                            class="delete"><i class="fa fa-remove"></i> delete </button>
                    </form>
                     @endif
                    {{-- <button style="background: white;color:rgb(97, 95, 95);text-transform:inherit;" class="delete"><i class="fa fa-remove"></i> launch job </button> --}}
                    @if (freelance_jobs::where('job_id', $job->id)->where('is_hired', 1)->first() &&
                        empty($job->end_at) &&
                        empty($job->start_at))
                        <a href="{{ route('job.customer.launch', $job) }}"><i class="fa  fa-square "></i> launch job
                        </a>
                    @elseif(!empty($job->start_at) && empty($job->end_at))
                        <a href="{{ route('job.finish', $job) }}"><i class="fa  fa-check "></i> Mark Finish</a>
                        {{-- <a href="#"><i class="fa  fa-eye-slash"></i> Do</a> --}}
                    @elseif(!empty($job->start_at) && !empty($job->end_at))
                    @endif
                    {{-- <a href="{{ route('job.delete',$job) }}" class="delete "><i class="fa fa-remove"></i> Delete</a> --}}

                    {{-- <a href="#"><i class="fa  fa-square "></i> Not Finish (Not give) </a> --}}

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
