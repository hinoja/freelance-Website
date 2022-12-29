<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="datatable-wrapper table-responsive">
                        <table id="datatable" class="display compact table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    {{-- <th>Description</th> --}}
                                    <th>Created By</th>
                                    <th>Salary</th>
                                    <th>Freelance</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                             @forelse ($jobs as $job)
                                <tr>
                                    <td>{{ $loop->index }}</td>
                                    <td>{{ $job->title }}</td>
                                    <td>{{ $job->location }}</td>
                                    {{-- <td>{{ $job->description }}</td> --}}
                                    <td>{{ $job->customer->user->name }}</td>
                                    <td>{{ $job->salary }}</td>
                                    <td>

                                        <div class="btn-group mb-2 mr-2 mb-xl-0 mr-xl-0">
                                            <button type="button" class="btn btn-primary">Appliers</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                @foreach ($job->freelances as $freelance)
                                                    {{-- <a class="dropdown-item" href="javascript:void(0)">{{ $freelance->userable->name }}</a> --}}
                                                    <a class="dropdown-item" href="javascript:void(0)">{{ $freelance->user }}</a>
                                                @endforeach

                                                {{-- <div class="dropdown-divider"></div> --}}
                                                {{-- <a class="dropdown-item" href="javascript:void(0)">Separated link</a> --}}
                                            </div>
                                        </div>



                                    </td>



                                    <td>{{ $job->begin }}</td>
                                    <td>{{ $job->deadline }}</td>
                                    <td>{{ $job->created_at->diffForHumans() }}</td>
                                    <td>
                                        {{-- <div class="btn btn-success">Show</div> --}}
                                        <div class="btn btn-outline-danger">delete</div>
                                        <div class="btn btn-outline-info">Show</div>
                                    </td>

                                </tr>
                             @empty
                                    Any Job
                             @endforelse




                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>N°</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    {{-- <th>Description</th> --}}
                                    <th>Created By</th>
                                    <th>Salary</th>
                                    <th>Start Date</th>
                                    {{-- <th>Freelance</th> --}}
                                    <th>End Date</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
