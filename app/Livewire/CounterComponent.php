<?php

namespace App\Livewire;

use Livewire\Component;

class CounterComponent extends Component
{
    public function render()
    {
        return view('livewire.counter-component');
    }


    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
}
