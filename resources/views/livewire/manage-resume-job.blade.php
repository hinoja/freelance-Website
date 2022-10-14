
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
                <td class="title"><a href="{{ route('job.show',$job->slug) }}"> {{ (Category::find( $job->category_id))->name }}  , {{ $job->title   }}</a></td>
                <td class="centered">-</td>
                <td> {{ $job->created_at->format(' Y m d') }}</td>
                <td>{{ $job->deadline}}</td>
                <td class="centered"><a href="manage-applications.html" class="button">Show (4)</a></td>
                <td class="action">
                    <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="#"><i class="fa  fa-check "></i> Mark Filled</a>
                    <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
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
