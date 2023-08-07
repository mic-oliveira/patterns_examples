<?php

namespace App\Repositories;

use App\Models\Boleto;
use Illuminate\Database\Eloquent\Collection;

class BoletoEloquentRepository implements RepositoryInterface
{
    public function getAll(): Collection
    {
        return Boleto::all();
    }

    /*public function find(int|string $id)
    {
        return Boleto::find($id);
    }*/

    public function create(mixed $object)
    {
        return Boleto::create($object);
    }

    /*public function update(mixed $object, int|string $id)
    {
        $boleto = Boleto::find($id)->fill($object);
        $boleto->save();
        return $boleto->refresh();
    }

    public function delete(int|string $id)
    {
        $boleto = Boleto::find($id);
        $boleto->delete();
        return $boleto->refresh();
    }*/
}