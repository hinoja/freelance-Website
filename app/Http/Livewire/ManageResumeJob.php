<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class ManageResumeJob extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $job = '';

    public function render()
    {
        // ->orderBy('created_at','DESC')
        $job = Job::where('customer_id', Auth::user()->userable->id)->orderBy('created_at', 'DESC')->paginate(4);
        //  $job = Auth::user()->userable->jobs();

        return view('livewire.manage-resume-job', ['jobs' => $job, 'customer' => Auth::user()->userable]);
    }
}
