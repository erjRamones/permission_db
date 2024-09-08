<?php

namespace App\Interface\Repository;

interface DBLibraryRepositoryInterface
{
    public function findMany(string $modelType);

    public function findOneById(object $payload, int $id);

    public function create(object $payload);

    public function update(string $modelType, int $id, object $payload);

    public function delete(string $modelType, int $id);
}
