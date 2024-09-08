<?php

namespace App\Service;

use App\Http\Resources\DBLibraryResource;
use App\Interface\Repository\DBLibraryRepositoryInterface;
use App\Interface\Service\DBLibraryServiceInterface;

class DBLibraryService implements DBLibraryServiceInterface
{
    private $dbLibraryRepository;

    public function __construct(DBLibraryRepositoryInterface $dbLibraryRepository)
    {
        $this->dbLibraryRepository = $dbLibraryRepository;
    }

    public function findEntries(string $modeltype)
    {
        $library = $this->dbLibraryRepository->findMany($modeltype);
        return DBLibraryResource::collection($library);
    }

    public function findEntry(object $payload, int $id)
    {
        $library = $this->dbLibraryRepository->findOneById($payload, $id);

        return new DBLibraryResource($library);
    }

    public function createEntry(object $payload)
    {
        $library = $this->dbLibraryRepository->create($payload);

        return new DBLibraryResource($library);
    }

    public function updateEntryById(string $modeltype, object $payload, int $id)
    {
        $library = $this->dbLibraryRepository->update($modeltype, $id, $payload);

        return new dbLibraryResource($library);
    }

    public function deleteEntryById(string $modeltype, int $id)
    {
        $library = $this->dbLibraryRepository->delete($modeltype, $id);
    }
}
