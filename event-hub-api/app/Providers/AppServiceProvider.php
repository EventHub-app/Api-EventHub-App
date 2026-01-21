<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Infra as RepositoriesCreateUserRepositoryImp;
use App\Repositories\UserCreateRepository as RepositoriesUserCreateRepository;
use App\UseCases\CreateUserUseCase;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind da interface para implementação
        $this->app->bind(RepositoriesUserCreateRepository::class, RepositoriesCreateUserRepositoryImp::class);

      
        $this->app->bind(CreateUserUseCase::class, function($app){
            return new CreateUserUseCase($app->make(RepositoriesUserCreateRepository::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
