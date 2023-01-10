<?php

namespace App\Http\Livewire\Admin;

use App\Models\Customer;
use App\Models\Freelance;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Brian2694\Toastr\Facades\Toastr;

class ListUser extends Component
{
    use WithPagination;
    public $delete_id, $editUserId, $name, $email, $state;
    // public $roleUser;
    protected $paginationTheme = 'bootstrap';

    // public function updated(){
    //     dd($this->user);

    // }

    public function deleteConfirmation($id)
    {
        //    $user= User::find($id);
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('confirmationDeleteUsermodal');
    }
    public function deleteUserData()
    {
        $user = User::find($this->delete_id);
        if ($user->role_id === 1) {
            $frelance = Freelance::find($user->userable->id);
            $frelance->delete();
        } else {
            $customer = Customer::find($user->userable->id);
            $customer->delete();
        }
        $user->delete();
        $this->dispatchBrowserEvent('close-modal');
        Toastr::success('<i class="fa fa-check"></i>User deleted successfuly ', 'Success!!');
    }
    public function resetInput()
    {
        $this->name = "";
        $this->email = "";
        $this->state = "";
    }
    public function editUserModal($id)
    {
        $editUser = User::find($id);
        $this->editUserId =  $id;
        $this->name = $editUser->name;
        $this->email =  $editUser->email;
        $this->dispatchBrowserEvent('showEditUsermodal');
    }
    public function updateUser()
    {
        $this->validate([
            'name' => ['required', 'string', 'min:2'],
            'email' => ['required', 'email', 'unique:users,email'],
        ]);
        $UpdateUser = User::findOrFail($this->editUserId);
        if ($UpdateUser->role_id === 1) {
            // $role =  Freelance::where('userable_id', $this->editUserId)->first();
            // $role->email = $this->email;
            $UpdateUser->userable->email  ;
            // $role->is_active = $this->state;
            // $role->save();
        }
        $UpdateUser->name = $this->name;
        $UpdateUser->email = $this->email;
        $UpdateUser->is_active = $this->state;
        $UpdateUser->save();
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        Toastr::success('<i class="fa fa-check"></i>User updated successfuly ', 'Success!!');
    }
    public function render()
    {
        return view('livewire.admin.list-user', ['users' => User::OrderBy('created_at', 'DESC')->paginate(15)]);
    }
}
