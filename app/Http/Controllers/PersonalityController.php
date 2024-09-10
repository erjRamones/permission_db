<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalityStoreRequest;
use App\Http\Requests\PersonalityUpdateRequest;
use App\Interface\Service\PersonalityServiceInterface;
use Illuminate\Http\Request;

class PersonalityController extends Controller
{

    private $personalityService;
    public function __construct(PersonalityServiceInterface $personalityService) {

        $this->$personalityService= $personalityService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->personalityService->findPersonality();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonalityStoreRequest $request)
    {
        return $this->personalityService->createPersonality($request);

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return $this->personalityService->findPersonalityById($id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonalityUpdateRequest $request, int $id)
    {
        return $this->personalityService->updatePersonality($request, $id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->personalityService->deletePersonality($id);

    }
}
