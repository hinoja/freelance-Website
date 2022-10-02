<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class ManageResumeJob extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $job="";

    public function render()
    {
        // ->orderBy('created_at','DESC')
         $job = Job::where('customer_id', Auth::user()->userable->id)->orderBy('created_at','DESC')->paginate(5);
        //  $job = Auth::user()->userable->jobs();
        return view('livewire.manage-resume-job', ['jobs' => $job, 'customer' => Auth::user()->userable]);
    }
}
