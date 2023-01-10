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
                                    {{-- <th>Freelance</th> --}}
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
                                        <td>{{ $job->customer->user->name }}</td>
                                        <td>{{ $job->salary }}</td>
                                        <td>{{ $job->begin }}</td>
                                        <td>{{ $job->deadline }}</td>
                                        <td>{{ $job->created_at->diffForHumans() }}</td>
                                        <td> <a href="#" wire:click="show({{ $job->id }})" data-toggle="modal"
                                                data-target="#showJobModal"
                                                class="btn btn-round  btn-sm btn-outline-info"><i class="fa fa-eye"></i>
                                            </a>
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








        <div wire:ignore.self class="modal fade" id="showJobModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="showJobModal">Show Job</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="mt-1 mt-sm-2" wire:submit.prevent="saveTag">

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Title </label>
                                        <input type="text" wire:model="title" class="form-control" readonly /> <br>
                                        <label class="control-label"> Created By :Name </label>

                                        <input type="text" wire:model="customer" class="form-control" readonly />
                                        <br>

                                        <label class="control-label">Created By :Email </label>

                                        <input type="text" wire:model="email" class="form-control" readonly /> <br>
                                        <label class="control-label" wire:loading> Loading Freelances Appliers ...</p>
                                            </label>

                                        <select class="form-control" rea>
                                            <option selected>Appliers</option>
                                            @foreach ($freelances as $freelance)
                                                <option>{{ $freelance->user->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                        class="fa fa-times"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scriptEventModal')
        <script>
            window.addEventListener('close-modal', event => {
                $('#showJobModal').modal('hide');
            });
        </script>
    @endpush

</div>
