<?php

namespace App\Http\Livewire\Admin;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class ListJob extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.admin.list-job',['jobs'=>Job::OrderBy('created_at','DESC')->paginate(15)]);
        // return view('dashboard.views.jobs',]);
    }
}
