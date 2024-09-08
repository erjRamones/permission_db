<?php

namespace App\Http\Controllers;

use App\Http\Requests\DBLibraryShowRequest;
use App\Http\Requests\DBLibraryStoreRequest;
use App\Http\Requests\DBLibraryUpdateRequest;
use App\Interface\Service\DBLibraryServiceInterface;
use App\Models\DBLibrary;
use Barryvdh\Debugbar\Facades\Debugbar as FacadesDebugbar;
use DebugBar\DebugBar;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Log;
use Response;
use Symfony\Component\ErrorHandler\Debug;

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

    public function store(DBLibraryStoreRequest $request)
    {
        return $this->dblibraryservice->createEntry($request);
    }

    public $reqs;

    public function show(DBLibraryShowRequest $request, int $id)
    {
        return $this->dblibraryservice->findEntry($request, $id);
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
