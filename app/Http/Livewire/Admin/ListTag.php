<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class ListTag extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.admin.list-tag',['tags'=>Tag::OrderBy('created_at','DESC')->paginate(15)]);
        // return view('livewire.admin.list-tag',['tags'=>Tag::OrderBy('created_at','DESC')]);
    }
}



