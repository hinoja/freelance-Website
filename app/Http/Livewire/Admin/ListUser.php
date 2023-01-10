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
    public $delete_id, $editUserId, $name, $email;
    protected $paginationTheme = 'bootstrap';
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
            // 'name'=>['required','string','min:2','unique:categories,name'],
        ]);
        $UpdateUser = User::findOrFail($this->editUserId);
        //    dd($this->name,$this->email);
        $UpdateUser->name = $this->name;
        $UpdateUser->email = $this->email;
        $UpdateUser->save();
        // dd( $UpdateUser);
        // dd($UpdateUser);
        // $UpdateUser->save();
        // if ( $user->role_id === 1) {
        //     $role =  Freelance::where('userable_id',$this->editUser->id)->first();
        //     $role->email = $this->email;
        //     $role->save();
        // }
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        Toastr::success('<i class="fa fa-check"></i>User updated successfuly ', 'Success!!');
        // dd($this->edit_id);
    }
    public function render()
    {
        return view('livewire.admin.list-user', ['users' => User::OrderBy('created_at', 'DESC')->paginate(15)]);
    }
}
