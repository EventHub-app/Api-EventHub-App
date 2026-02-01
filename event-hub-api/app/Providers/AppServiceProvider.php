<?php

namespace App\Providers;

use App\Repositories\CreateServiceRepository;
use App\Repositories\CreateServiceRepositoryImp;
use App\Repositories\UserCreateRepository;
use App\UseCases\CreateServiceUseCase;
use App\UseCases\ListServicesUseCase;
use App\UseCases\ListUsersUsecasese;
use App\UseCases\LoginUseCase;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CreateUserRepositoryImp;
use App\Repositories\ListServicesRepository;
use App\Repositories\ListServicesRepositoryImpl;
use App\Repositories\ListUserRepository;
use App\Repositories\LoginRepository;
use App\Repositories\LoginRepositoryImp;
use App\Repositories\ListUserRepositoryImp;
use App\UseCases\CreateUserUseCase;


class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // conexão para criar usuário

        $this->app->bind(UserCreateRepository::class, CreateUserRepositoryImp::class);
        $this->app->bind(CreateUserUseCase::class, function ($app) {
            return new CreateUserUseCase($app->make(CreateUserRepositoryImp::class));
        });

        //Login Connection
        $this->app->bind(LoginRepository::class, LoginRepositoryImp::class);

        $this->app->bind(LoginUseCase::class, function ($app) {
            return new LoginUseCase(
                $app->make(LoginRepositoryImp::class)
            );
        });

        //List Users Connection

        $this->app->bind(ListUserRepository::class, ListUserRepositoryImp::class);
        $this->app->bind(ListUsersUsecasese::class, function ($app) {
            return new ListUsersUsecasese($app->make(ListUserRepositoryImp::class));
        });

        //Connection od Services

        $this->app->bind(CreateServiceRepository::class, CreateServiceRepositoryImp::class);
        $this->app->bind(CreateServiceUseCase::class, function ($app) {
            return new CreateServiceUseCase($app->make(CreateServiceRepositoryImp::class));
        });

        $this->app->bind(ListServicesRepository::class, ListServicesRepositoryImpl::class);
        $this->app->bind(ListServicesUseCase::class, function ($app) {
            return new ListServicesUseCase($app->make(ListServicesRepositoryImpl::class));
        });
    }

    public function boot(): void
    {
        //
    }
}
