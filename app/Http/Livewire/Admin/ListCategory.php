<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class ListCategory extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.admin.list-category',['categories'=>Category::OrderBy('created_at','DESC')->paginate(2)]);
    }
}
