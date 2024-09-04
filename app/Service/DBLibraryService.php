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

    public function findEntry(string $modeltype, int $id)
    {
        $library = $this->dbLibraryRepository->findOneById($modeltype, $id);

        return DBLibraryResource::collection($library);
    }

    public function createEntry(string $modeltype, object $payload)
    {
        $library = $this->dbLibraryRepository->create($modeltype, $payload);

        return DBLibraryResource::collection($library);
    }

    public function updateEntryById(string $modeltype, object $payload, int $id)
    {
        $library = $this->dbLibraryRepository->update($modeltype, $id, $payload);

        return dbLibraryResource::collection($library);
    }

    public function deleteEntryById(string $modeltype, int $id)
    {
        $library = $this->dbLibraryRepository->delete($modeltype, $id);
    }
}
