<?php

namespace App\Providers;

use App\Interface\Repository\DBLibraryRepositoryInterface;
use App\Interface\Repository\StudentRepositoryInterface;
use App\Interface\Repository\UserRepositoryInterface;
use App\Interface\Service\AuthenticationServiceInterface;
use App\Interface\Service\DBLibraryServiceInterface;
use App\Interface\Service\StudentServiceInterface;
use App\Repository\DBLibraryRepository;
use App\Repository\StudentRepository;
use App\Repository\UserRepository;
use App\Service\AuthenticationService;
use App\Service\DBLibraryService;
use App\Service\StudentService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //Repository
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(DBLibraryRepositoryInterface::class, DBLibraryRepository::class);

        //Service
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
