<?php

namespace App\Http\Livewire;

use Brian2694\Toastr\Facades\Toastr;
use Livewire\Component;

class Favorite extends Component
{
    public $job;

    public function addLike()
    {
        // auth()->user()->userable->likes()->attach($this->job->id);

        auth()->user()->userable->likes()->toggle($this->job->id);
        Toastr::success('You Have Successfully add in your Favorite\'s list ', 'Success!!');
    }

    public function render()
    {
        return view('livewire.favorite');
    }
}
