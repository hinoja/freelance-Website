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
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                    <tr>
                                        <th scope="row">{{ $loop->index }}</th>
                                        <td>{{ $tag->name }}</td>


                                        <td> <a href="#" wire:click="edit({{ $tag->id }})"
                                                data-toggle="modal" data-target="#editTagModal"
                                                class="btn btn-round icon-wrap  btn-sm btn btn-outline-primary"><i
                                                    class="fa fa-pencil-square-o"></i>
                                            </a>
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





    {{-- edit tag modal --}}
    <div wire:ignore.self class="modal fade" id="editTagModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTagModal">Edit Tags</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  class="mt-1 mt-sm-2" wire:submit.prevent="editTag()">

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Tag Name</label>
                                    <input type="text" wire:model="nameEdit" class="form-control"
                                        placeholder="Tag Name here" />
                                    @error('nameEdit')
                                        <span class="text-danger">{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                    class="fa fa-times"></i></button>
                            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- end edit tag modal --}}
</div>
@push('scriptEventModal')
    <script>
        window.addEventListener('closeTagModal', event => {
            $('#listTagModal').modal('hide');
            // $('#editTagModal').modal('hide');
            // $('#deleteUserModal').modal('hide');closeTagEditModal
        });
        // window.addEventListener('confirmationDeleteUsermodal', event => {
        //     $('#deleteUserModal').modal('hide');
        // });
        window.addEventListener('closeTagEditModal', event => {
            $('#editTagModal').modal('hide');
        });
        // window.addEventListener('closeTagEditModal', event => {
        //     $('#editTagModal').modal('show');
        // });
    </script>
@endpush
