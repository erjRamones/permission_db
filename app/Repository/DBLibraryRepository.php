<?php

namespace App\Repository;

use App\Interface\Repository\RepositoryInterface;
use App\Factories\DBBaseLibraryFactory;
use App\Interface\Repository\DBLibraryRepositoryInterface;
use App\Models\DBLibrary;
use Illuminate\Http\Response;

class DBLibraryRepository implements DBLibraryRepositoryInterface
{
    public function findMany(string $modeltype)
    {
        $dblibrary = new DBBaseLibraryFactory($modeltype, null);
        return $dblibrary::findMany($modeltype);
    }

    public function findOneById(string $modeltype, int $id)
    {
        $dblibrary = new DBBaseLibraryFactory($modeltype, null);
        return $dblibrary::findMany($dblibrary->$modeltype);
    }

    public function create(string $modeltype, object $payload)
    {
        $dblibrary = new DBBaseLibraryFactory($modeltype, $payload);
        return $dblibrary::createEntry($dblibrary->$modeltype, $payload);
    }

    public function delete(string $modeltype, int $id)
    {
        $dblibrary = new DBBaseLibraryFactory($modeltype, null);
        return $dblibrary::deleteEntry($dblibrary->$modeltype, $id);
    }

    public function update(string $modeltype, int $id, object $payload)
    {
        $dblibrary = new DBBaseLibraryFactory($modeltype, $payload);
        $dblibrary::updateEntry($dblibrary->$modeltype, $id, $payload);

    }
}
