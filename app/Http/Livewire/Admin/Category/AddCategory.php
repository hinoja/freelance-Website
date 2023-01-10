<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;

class AddCategory extends Component
{

    public $name;

    public function resetInput(){
        $this->name ="";
    }
    public function saveCategory(){
        $data=$this->validate(['name'=>['required','string','min:2','unique:categories,name']]);
        Category::create($data);
        $this->resetInput();
        $this->dispatchBrowserEvent('closemodalCategory');
        Toastr::success('<i class="fa fa-check"></i> Category added successfuly ', 'Success!!');
    }

    public function render()
    {
        return view('livewire.admin.category.add-category');
    }
}
