<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanApplicationStoreRequest;
use App\Http\Requests\LoanApplicationUpdateRequest;
use App\Interface\Service\LoanApplicationServiceInterface;
use Illuminate\Http\Request;

class LoanApplicationController extends Controller
{

    private $loanapplicationService;
    public function __construct(LoanApplicationServiceInterface $loanapplicationService)
    {
        $this -> $loanapplicationService=$loanapplicationService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->loanapplicationService->findLoanApplication();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoanApplicationStoreRequest $request)
    {
        return $this->loanapplicationService->createLoanApplication($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->loanapplicationService->findLoanApplicationById($id);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LoanApplicationUpdateRequest $request, int $id)
    {
        return $this->loanapplicationService->updateLoanApplication($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->loanapplicationService->deleteLoanApplication( $id);
    }
}
