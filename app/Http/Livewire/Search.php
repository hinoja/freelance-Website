<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class Search extends Component
{   protected $paginationTheme = 'bootstrap';
    public string $query = '';
    public $jobs=[];
    public function updatedQuery()
    {

            $words='%' .$this->query. '%';
     if(strlen($this->query ) >2){
        $this->jobs= Job::where('title','like',$words)
        ->orWhere('description','like',$words)
        ->get();
        // dd($this->jobs);
     }

    }

    public function render()
    {
        return view('livewire.search',['job'=>$this->jobs]);
    }
}
