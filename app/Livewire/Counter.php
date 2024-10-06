<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment(): void
    {
        $this->count += 1;
    }

    public function render(): View
    {
        return view('livewire.counter');
    }
}
