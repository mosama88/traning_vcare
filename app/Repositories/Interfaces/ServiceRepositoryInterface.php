<?php
namespace App\Repositories\Interfaces;

use App\Models\Service;

interface ServiceRepositoryInterface
{
    public function all(): \Illuminate\Database\Eloquent\Collection;

    public function create(array $data): ?Service;

    public function update(array $data, int $id): int;

    public function delete(int $id): bool;

    public function find(int $id): ?Service;
}