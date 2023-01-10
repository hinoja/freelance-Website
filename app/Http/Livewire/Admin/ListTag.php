<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;
use Brian2694\Toastr\Facades\Toastr;

class ListTag extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $nameEdit, $editIdTag;
    public function resetInput()
    {
        $this->nameEdit = "";
    }
    public function edit($id)
    {
        $tag = Tag::find($id);
        $this->editIdTag = $id;
        $this->nameEdit = $tag->name;
        // listTagModal
        $this->dispatchBrowserEvent('closeTagModal');
    }
    public function editTag()
    {
        $this->validate(['nameEdit' => ['required', 'string', 'min:2', 'unique:tags,name']]);
        $tagEdit = Tag::where('id', $this->editIdTag)->first();
        $tagEdit->name = $this->nameEdit;
        // $tagEdit->name=$this->nameEdit;
        $tagEdit->save();
        $this->resetInput();
        Toastr::success('<i class="fa fa-check"></i>Tag updated successfuly ', 'Success!!');
        $this->dispatchBrowserEvent('closeTagEditModal');
    }
    public function render()
    {
        return view('livewire.admin.list-tag', ['tags' => Tag::OrderBy('created_at', 'DESC')->paginate(100)]);
        // return view('livewire.admin.list-tag',['tags'=>Tag::OrderBy('created_at','DESC')]);
    }
}
