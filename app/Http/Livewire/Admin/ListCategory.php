<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Brian2694\Toastr\Facades\Toastr;

class ListCategory extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function resetInput(){
        $this->nameEdit ="";
    }
    public function edit($id)
    {
        $category = Category::find($id);
        $this->editIdCategory = $id;
        $this->nameEdit = $category->name;
        $this->dispatchBrowserEvent('closeCategoryModal');
    }
    public function editCategory()
    {
        $this->validate(['nameEdit' => ['required', 'string', 'min:2', 'unique:categories,name']]);
        $categoryEdit = Category::where('id', $this->editIdCategory)->first();
        $categoryEdit->name = $this->nameEdit;
        // $categoryEdit->name=$this->nameEdit;
        $categoryEdit->save();
        $this->resetInput();
        Toastr::success('<i class="fa fa-check"></i>Category updated successfuly ', 'Success!!');
        $this->dispatchBrowserEvent('closeCategoryEditModal');
    }
    public function render()
    {
        return view('livewire.admin.list-category',['categories'=>Category::OrderBy('created_at','DESC')->paginate(100)]);
    }
}
