<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentPermissionStoreRequest;
use App\Http\Requests\DocumentPermissionUpdateRequest;
use App\Interface\Service\DocumentPermissionServiceInterface;

class DocumentPermisionController extends Controller
{
    private $documentPermissionService;

    public function __construct(DocumentPermissionServiceInterface $documentPermissionService)
    {
        $this->documentPermissionService=$documentPermissionService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->documentPermissionService->findDocumentPermission();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocumentPermissionStoreRequest $request)
    {
        return $this->documentPermissionService->createDocumentPermission($request);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return $this->documentPermissionService->findDocumentPermissionById($id);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DocumentPermissionUpdateRequest $request, int $id)
    {
        return $this->documentPermissionService->updateDocumentPermission($request, $id);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        return $this->documentPermissionService->deleteDocumentPermission($id);

    }
}
