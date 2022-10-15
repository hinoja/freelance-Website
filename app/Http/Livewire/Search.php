<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;
use Illuminate\Support\Str;

class Search extends Component
{
    protected $paginationTheme = 'bootstrap';

    public string $query = '';

    public string $message = '';

    public $jobs = [];

    public function mount()
    {
        $this->jobs = Job::query()->get();
    }

    public function searchJob()
    {
        if (!empty($this->query) || strlen($this->query) > 2) {
            $words = '%'.$this->query.'%';
            $this->jobs = Job::where('title', 'like', $words)
            ->orWhere('description', 'like', $words)
            ->orWhere('companyName', 'like', $words)
            ->get();

            if (empty($this->jobs)) {
                $this->message = 'No matching result for "' . $this->query . '"';
            } else {
                $this->message = $this->jobs->count() . ' ' . Str::plural('job', $this->jobs->count()) . ' found for "' . $this->query . '"';
            }
        } else {
            $this->message = 'Please type at least 3 characters.';
        }

        sleep(1.3);
    }

    public function render()
    {
        return view('livewire.search');
    }
}
