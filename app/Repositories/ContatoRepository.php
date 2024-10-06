<?php

namespace App\Repositories;

use App\Models\Contato;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ContatoRepository implements Repository
{
    public function all(): Collection
    {
        // return Contato::all();

        return Contato::withTrashed()->get();
    }

    public function find(int $id): Contato
    {
        return Contato::find($id);
    }

    public function create(array $details): Contato
    {
        return Contato::create($details);
    }

    public function update(Model $entity, array $details): bool
    {
        return Contato::where($entity)->update($details);
    }

    public function delete(int $id): int
    {
        return Contato::destroy($id);
    }
}
