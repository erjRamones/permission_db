<?php

namespace App\Service;
use App\Http\Resources\LoanApplicationCoMakerResource;
use App\Interface\Repository\LoanApplicationFeeRepositoryInterface;
use App\Interface\Service\LoanApplicationCoMakerServiceInterface;

class LoanApplicationCoMakerService implements LoanApplicationCoMakerServiceInterface
{
    private $loanApplicationCoMakerRepository;

    public function __construct(LoanApplicationFeeRepositoryInterface $loanApplicationFeeRepository)
    {
        $this->loanApplicationCoMakerRepository = $loanApplicationFeeRepository;
    }

    public function findCoMakers()
    {
        $loanApplicationCoMaker = $this->loanApplicationCoMakerRepository->findMany();

        return LoanApplicationCoMakerResource::collection($loanApplicationCoMaker);
    }

    public function findLoanCoMakerById($id)
    {
        $loanApplicationCoMaker = $this->loanApplicationCoMakerRepository->findOneById($id);

        return LoanApplicationCoMakerResource::collection($loanApplicationCoMaker);
    }

    public function createLoanCoMaker(object $payload)
    {
        $loanApplicationCoMaker = $this->loanApplicationCoMakerRepository->create($payload);

        return LoanApplicationCoMakerResource::collection($loanApplicationCoMaker);
    }

    public function updateLoanCoMaker(object $payload, int $id)
    {
        $loanApplicationCoMaker = $this->loanApplicationCoMakerRepository->update($payload, $id);

        return new LoanApplicationCoMakerResource($loanApplicationCoMaker);
    }

    public function deleteLoanCoMaker(int $id)
    {
        return $this->loanApplicationCoMakerRepository->delete($id);
    }
}
