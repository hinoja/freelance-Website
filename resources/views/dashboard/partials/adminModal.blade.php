
    {{-- addTagModal  --}}
    <div class="modal fade" id="addTagModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTagModal">Add Tags</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="mt-3 mt-sm-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Tag Name</label>
                                    <input type="text" class="form-control" placeholder="Tag Name here" />
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Add</button>
                </div>
            </div>
        </div>
    </div>
    {{-- endAddTagModal  --}}

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
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>PHP</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Java</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>C#</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>JavaScript</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Kotlin</td>
                                </tr>
                            </tbody>
                        </table>
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

    {{-- AddCategoryModal  --}}
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModal">Add Categories</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="mt-3 mt-sm-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Category Name</label>
                                    <input type="text" class="form-control" placeholder="Category Name here" />
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Add</button>
                </div>
            </div>
        </div>
    </div>
    {{-- endAddCategoryModal  --}}

    {{-- listCategoryModal --}}

    <div class="modal fade" id="listCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="listCategoryModal">List Tags</h5>
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
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($tags as $tag)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mobile Developer</td>
                                    </tr>
                                @empty
                                       Empty
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Add</button>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- endlistCategoryModal --}}
