<?php

namespace App\Http\Controllers;

use App\Http\Requests\DBLibraryStoreRequest;
use App\Http\Requests\DBLibraryUpdateRequest;
use App\Interface\Service\DBLibraryServiceInterface;
use App\Models\DBLibrary;

class DBLibraryController extends Controller
{
    private $dblibraryservice;

    public function __construct(DBLibraryServiceInterface $dblibraryservice)
    {
        $this->dblibraryservice = $dblibraryservice;
    }

    public function index(string $modeltype)
    {
        return $this->dblibraryservice->findEntries($modeltype);
    }

    public function store(string $modeltype, DBLibraryStoreRequest $request)
    {
        return $this->dblibraryservice->createEntry($modeltype, $request);
    }

    public function show(string $modeltype, int $id)
    {
        return $this->dblibraryservice->findEntry($modeltype, $id);
    }

    public function update(string $modeltype, DBLibraryUpdateRequest $request, int $id)
    {
        return $this->dblibraryservice->updateEntryById($modeltype, $request, $id);
    }

    public function destroy(string $modeltype, int $id)
    {
        return $this->dblibraryservice->deleteEntryById($modeltype, $id);
    }
}
