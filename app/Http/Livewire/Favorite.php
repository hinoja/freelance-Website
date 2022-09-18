<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Brian2694\Toastr\Facades\Toastr;

class Favorite extends Component
{
    public $job;
    public function addLike(){
        // auth()->user()->userable->likes()->attach($this->job->id);

         auth()->user()->userable->likes()->toggle($this->job->id);
        Toastr::success('You Have Successfully add in your Favorite\'s list ', 'Success!!');

    }
    public function render()
    {

        return view('livewire.favorite');
    }
}
