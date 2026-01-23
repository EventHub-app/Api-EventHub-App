<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\UserCreateRepository as RepositoriesUserCreateRepository;
use App\Repositories\CreateUserRepositoryImp;
use App\Repositories\LoginRepository;
use App\Repositories\LoginRepositoryImp;

use App\UseCases\CreateUserUseCase;
use App\UseCases\LoginUseCase as UseCasesLoginUseCase;
use App\UseCases\LoginUseCaseImp;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // conexão para criar usuário
        $this->app->bind(
            RepositoriesUserCreateRepository::class,
            CreateUserRepositoryImp::class
        );

        $this->app->bind(CreateUserUseCase::class, function ($app) {
            return new CreateUserUseCase(
                $app->make(RepositoriesUserCreateRepository::class)
            );
        });

        // conexão para login
        $this->app->bind(LoginRepository::class, LoginRepositoryImp::class);

        $this->app->bind(
            UseCasesLoginUseCase::class,
            LoginRepositoryImp::class
        );
    }

    public function boot(): void
    {
        //
    }
}
