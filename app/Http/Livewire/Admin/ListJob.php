<?php

namespace App\Http\Livewire\Admin;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class ListJob extends Component
{
    use WithPagination;
    public $title, $customer,$email, $freelances;

    protected $paginationTheme = 'bootstrap';
    public function mount(){
        $this->freelances=collect();
    }

    public function show($id)
    {
        $job = Job::find($id);
        $this->title = $job->title;
        $this->customer =  $job->customer->user->name;
        $this->email =  $job->customer->user->email;
        $this->freelances =  $job->freelances;

        $this->dispatchBrowserEvent('showJobModal');
    }

    public function render()
    {
        return view('livewire.admin.list-job', ['jobs' => Job::OrderBy('created_at', 'DESC')->paginate(15)]);
        // return view('dashboard.views.jobs',]);
    }
}
