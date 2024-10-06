<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface Repository
{
    /**
     * @return Collection
     */
    public function all();

    /**
     * @return Model
     * @param int $id
     */
    public function find(int $id);

    /**
     * @return Model
     * @param array<string,mixed> $details
     */
    public function create(array $details);

    /**
     * @return Model
     * @param Model $entity
     * @param array<string,mixed> $details
     */
    public function update(Model $entity, array $details);

    /**
     * @return boolean
     * @param int $id
     */
    public function delete(int $id);
}
