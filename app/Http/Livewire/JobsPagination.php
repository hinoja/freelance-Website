<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class JobsPagination extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public  $jobs="";
    public function render()
    {
        $job = Job::orderBy('created_at', 'DESC');
        return view('livewire.jobs-pagination', ['job' => $job->paginate(5)]);
    }
}
