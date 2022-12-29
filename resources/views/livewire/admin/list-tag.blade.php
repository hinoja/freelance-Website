<div>
    {{-- listTagModal --}}

    <div class="modal fade" id="listTagModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="listTagModal">List Tags</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-secondary mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                    <tr>
                                        <th scope="row">{{ $loop->index }}</th>
                                        <td>{{ $tag->name }}</td>
                                        <td>
                                            {{-- <div class="icon-wrap  btn btn-outline-primary"><i class="fa fa-eye"></i></div> --}}
                                            <div class="icon-wrap  btn btn-outline-primary"><i
                                                    class="fa fa-pencil-square-o"></i></div>
                                            {{-- <a   href="#"><i class="fa fa-pencil-square-o"></i></a> --}}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $tags->links() }}
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Add</button>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- endEditTagModal --}}
</div>


