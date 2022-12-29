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
                                       <th>Name</th>
                                       <th>email</th>
                                       <th>Type</th>
                                       <th>Status </th>
                                       {{-- <th>Start date</th> --}}
                                       <th>Created </th>
                                       <th>Actions</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @forelse ($users as $user)
                                       <tr>
                                           <td>{{ $loop->index }}</td>
                                           <td>{{ $user->name }}</td>
                                           <td>{{ $user->email }}</td>
                                           <td>
                                               @if ($user->userable_type === 'App\Models\Freelance')
                                                   Freelance
                                               @else
                                                   Customer
                                               @endif
                                           </td>
                                           <td>
                                               @if ($user->is_active === 1)
                                                   <span>Active </span>
                                               @else
                                                   <span style="color: red">disable</span>
                                               @endif
                                           </td>
                                           {{-- <td>27</td> --}}
                                           <td>{{ $user->created_at->diffForHumans() }} </td>
                                           <td>
                                               <a href="#" wire:click="deleteConfirmation({{ $user->id }})"
                                                   data-toggle="modal" data-target="#deleteUserModal"
                                                   class="btn btn-round  btn-sm btn-outline-danger"><i
                                                       class="fa fa-trash"></i> </a>{{-- //A REVOIR --}}
                                               <a href="#" wire:click="editUserModal({{ $user->id }})"  data-toggle="modal"
                                                   data-target="#EditUserModal"
                                                   class="btn btn-round  btn-sm btn-outline-primary"><i
                                                       class="fa fa-pencil"></i>
                                               </a>


                                           </td>
                                       </tr>
                                   @empty
                                       Any User
                                   @endforelse

                               </tbody>
                               <tfoot>
                                   <tr>
                                       <th>N°</th>
                                       <th>Name</th>
                                       <th>email</th>
                                       <th>Type</th>
                                       <th>Status </th>
                                       {{-- <th>Start date</th> --}}
                                       <th>Created </th>
                                       <th>Actions</th>
                                   </tr>
                               </tfoot>
                           </table>
                           {{ $users->links() }}
                       </div>
                   </div>
               </div>
           </div>
       </div>


       {{-- modal delete confirmation User --}}
       <div wire:ignore.self class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog modal-dialog-top" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="deleteUserModal">Delete User</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       Are you Sure? you want to delete this user data ?

                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                       <button type="button" wire:click="deleteUserData()" class="btn btn-success"> Yes !
                           Delete</button>
                   </div>

               </div>
           </div>
       </div>
       {{-- end modal confirmation delete User --}}


       {{-- edit modal user --}}
       <div wire:ignore.self class="modal fade" id="EditUserModal" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="EditUserModal">Edit User</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <form wire:submit.prevent="editUserModal" class="mt-1 mt-sm-2">
                           <div class="row">
                               <div class="col-12">
                                   <div class="form-group">
                                       <img src="{{ asset('asset/img/avtar/02.jpg') }}" alt="freelance">
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label">User Name</label>
                                       <input type="text" wire:model="name" class="form-control"
                                           placeholder="Edit Name here" />
                                       @error('name')
                                           <span class="text-danger ">{{ $message }} </span>
                                       @enderror
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label">Email</label>
                                       <input type="text" wire:model="email" class="form-control"
                                           placeholder="Edit Name here" />
                                       @error('email')
                                           <span class="text-danger ">{{ $message }} </span>
                                       @enderror
                                   </div>
                                   {{-- <div class="form-group">
                                       <label class="control-label">Status</label>
                                       <select name="" id="" class="form-control ">
                                           <option value="" selected>disable</option>
                                           <option value="" selected>active</option>
                                       </select>
                                   </div> --}}
                               </div>

                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                       class="fa fa-times"></i></button>
                               <button type="submit" wire:click="updateUser()" class="btn btn-success"> <i class="fa fa-save"></i></button>
                           </div>
                       </form>
                   </div>

               </div>
           </div>
       </div>
       {{-- end edit modal user --}}

   </div>


   @push('scriptEventModal')
       <script>
           window.addEventListener('close-modal', event => {
               $('#closeUserModal').modal('hide');
               $('#EditUserModal').modal('hide');
               $('#deleteUserModal').modal('hide');
           });
           window.addEventListener('confirmationDeleteUsermodal', event => {
               $('#deleteUserModal').modal('hide');
           });
           window.addEventListener('showEditUsermodal', event => {
               $('#EditUserModal').modal('show');
           });

       </script>
   @endpush
