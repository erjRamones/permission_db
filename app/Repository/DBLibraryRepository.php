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
        $dblibrary = new DBBaseLibraryFactory();
        return $dblibrary::findMany($modeltype);
    }

    public function findOneById(object $payload, int $id)
    {
        $dblibrary = new DBBaseLibraryFactory();
        return $dblibrary::findOne($payload, $id);
    }

    public function create(object $payload)
    {
        $dblibrary = new DBBaseLibraryFactory();
        return $dblibrary::createEntry($payload);
    }

    public function delete(string $modeltype, int $id)
    {
        $dblibrary = new DBBaseLibraryFactory();
        return $dblibrary::deleteEntry($dblibrary->$modeltype, $id);
    }

    public function update(string $modeltype, int $id, object $payload)
    {
        $dblibrary = new DBBaseLibraryFactory($modeltype, $payload);
        $dblibrary::updateEntry($dblibrary->$modeltype, $id, $payload);

    }
}
