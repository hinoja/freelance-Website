<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class Search extends Component
{
    protected $paginationTheme = 'bootstrap';

    public string $query = '';

    public $search = 0;

    public $jobs = [];

    public function searchJob()
    {
        $words = '%'.$this->query.'%';
        // if (strlen($this->query) > 2) {
        $this->jobs = Job::where('title', 'like', $words)
        ->orWhere('description', 'like', $words)
        ->orWhere('companyName', 'like', $words)
        ->get();
        $this->search = 1;

        // }
    }

    public function render()
    {
        return view('livewire.search', ['ResultJob' => $this->jobs, 'exist' => $this->search]);
    }
}
