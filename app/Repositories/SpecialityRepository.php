<?php

namespace App\Repositories;

use App\Models\Speciality;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Interfaces\SpecialityRepositoryInterface;

class SpecialityRepository implements SpecialityRepositoryInterface
{
    public function all(): Collection
    {
        return Speciality::all();
    }

    public function create(array $data): ?Speciality
    {
        return Speciality::create($data);
    }

    public function update(array $data, int $id): int
    {
        $model = Speciality::findOrFail($id);

        return $model->update($data);
    }

    public function delete(int $id): bool
    {
        $model = Speciality::findOrFail($id);

        return $model->delete();
    }

    public function find(int $id): ?Speciality
    {
        return Speciality::find($id);
    }
}