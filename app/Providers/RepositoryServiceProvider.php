<?php

namespace App\Providers;

use App\Http\Controllers\LoanApplicationCoMaker;
use App\Interface\Repository\CustomerRepositoryInterface;
use App\Interface\Repository\DBLibraryRepositoryInterface;
use App\Interface\Repository\EmployeeRepositoryInterface;
use App\Interface\Repository\FeeRepositoryInterface;
use App\Interface\Repository\LoanApplicationCoMakerRepositoryInterface;
use App\Interface\Repository\LoanApplicationFeeRepositoryInterface;
use App\Interface\Repository\LoanApplicationRepositoryInterface;
use App\Interface\Repository\PaymentFrequencyRepositoryInterface;
use App\Interface\Repository\PersonalityRepositoryInterface;
use App\Interface\Repository\UserRepositoryInterface;
use App\Interface\Service\AuthenticationServiceInterface;
use App\Interface\Service\CustomerServiceInterface;
use App\Interface\Service\DBLibraryServiceInterface;
use App\Interface\Service\EmployeeServiceInterface;
use App\Interface\Service\LoanApplicationCoMakerServiceInterface;
use App\Interface\Service\LoanApplicationFeeServiceInterface;
use App\Interface\Service\LoanApplicationServiceInterface;
use App\Interface\Service\PaymentFrequencyServiceInterface;
use App\Interface\Service\PersonalityServiceInterface;
use App\Repository\CustomerRepository;
use App\Repository\DBLibraryRepository;
use App\Repository\EmployeeRepository;
use App\Repository\FeeRepository;
use App\Repository\LoanApplicationCoMakerRepository;
use App\Repository\LoanApplicationFeeRepository;
use App\Repository\LoanApplicationRepository;
use App\Repository\PaymentFrequencyRepository;
use App\Repository\PersonalityRepository;
use App\Repository\UserRepository;
use App\Service\AuthenticationService;
use App\Service\CustomerService;
use App\Service\DBLibraryService;
use App\Service\EmployeeService;
use App\Service\FeeService;
use App\Service\LoanApplicationCoMakerService;
use App\Service\LoanApplicationFeeService;
use App\Service\LoanApplicationService;
use App\Service\PaymentFrequencyService;
use App\Service\PersonalityService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //Repository
        $this->app->bind(LoanApplicationRepositoryInterface::class, LoanApplicationRepository::class);
        $this->app->bind(PaymentFrequencyRepositoryInterface::class, PaymentFrequencyRepository::class);
        $this->app->bind(LoanApplicationCoMakerRepositoryInterface::class, LoanApplicationCoMakerRepository::class);
        $this->app->bind(LoanApplicationFeeRepositoryInterface::class, LoanApplicationFeeRepository::class);
        $this->app->bind(FeeRepositoryInterface::class, FeeRepository::class);
        $this->app->bind(PersonalityRepositoryInterface::class, PersonalityRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(DBLibraryRepositoryInterface::class, DBLibraryRepository::class);
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->bind(EmployeeRepositoryInterface::class, EmployeeRepository::class);

        //Service
        $this->app->bind(LoanApplicationServiceInterface::class, LoanApplicationService::class);
        $this->app->bind(PaymentFrequencyServiceInterface::class, PaymentFrequencyService::class);
        $this->app->bind(LoanApplicationCoMakerServiceInterface::class, LoanApplicationCoMakerService::class);
        $this->app->bind(LoanApplicationFeeServiceInterface::class, LoanApplicationFeeService::class);
        $this->app->bind(FeeRepositoryInterface::class, FeeService::class);
        $this->app->bind(PersonalityServiceInterface::class, PersonalityService::class);
        $this->app->bind(EmployeeServiceInterface::class, EmployeeService::class);
        $this->app->bind(CustomerServiceInterface::class, CustomerService::class);
        $this->app->bind(DBLibraryServiceInterface::class, DBLibraryService::class);
        $this->app->bind(AuthenticationServiceInterface::class, AuthenticationService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
