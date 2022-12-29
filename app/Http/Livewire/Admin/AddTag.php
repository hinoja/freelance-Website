<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;
use Brian2694\Toastr\Facades\Toastr;

class AddTag extends Component
{
    public $name;

    public function resetInput(){
        $this->name ="";
    }
    public function saveTag(){
        $data=$this->validate(['name'=>['required','string','min:2','unique:tags,name']]);
        Tag::create($data);
        // session()->flash('message','Tag added successfuly');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        Toastr::success('<i class="fa fa-check"></i> Tag added successfuly ', 'Success!!');
    }

    public function render()
    {
        return view('livewire.admin.add-tag');
    }
}
