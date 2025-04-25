<?php

namespace App\Repositories;

use App\Models\Service;
use App\Repositories\Interfaces\ServiceRepositoryInterface;

class ServiceRepository implements ServiceRepositoryInterface
{
    public function all(): \Illuminate\Database\Eloquent\Collection
    {
        return Service::all();
    }

    public function create(array $data): ?Service
    {
        return Service::create($data);
    }

    public function update(array $data, int $id): int
    {
        $model = Service::findOrFail($id);

        return $model->update($data);
    }

    public function delete(int $id): bool
    {
        $model = Service::findOrFail($id);

        return $model->delete();
    }

    public function find(int $id): ?Service
    {
        return Service::find($id);
    }
}