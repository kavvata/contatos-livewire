<?php

namespace App\Livewire\Contato;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Table extends Component
{
    public Collection $listaContato;

    public function mount(Collection $listaContato): void
    {
        $this->listaContato = $listaContato;
    }

    public function sort(string $campo): void
    {
        $this->listaContato = $this->listaContato->sortBy($campo);
    }

    public function render(): View
    {
        return view('livewire.contato.table');
    }
}
