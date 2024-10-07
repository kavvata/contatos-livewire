<?php

namespace App\Livewire\Contato;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Table extends Component
{
    public string $filtro;

    public Collection $cache;

    public Collection $contatos;

    public function mount(Collection $listaContato): void
    {
        $this->filtro = '';
        $this->cache = $listaContato;
        $this->contatos = $listaContato->sortBy('nome');
    }

    public function sort(string $campo): void
    {
        $this->contatos = $this->cache->sortBy($campo);
    }

    public function render(): View
    {
        if ($this->filtro == '') {
            $this->contatos = $this->cache->sortBy('nome');
        } else {
            $this->contatos = $this->cache->filter(function ($c) {
                return str_contains(strtoupper($c->nome), strtoupper($this->filtro));
            })->sortBy('nome');
        }

        return view('livewire.contato.table');
    }
}
