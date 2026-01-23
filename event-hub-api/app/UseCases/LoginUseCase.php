<?php

namespace App\UseCases;
use App\Http\Requests\auth\loginRequest;
use App\Repositories\LoginRepository;

class LoginUseCase
{
    public LoginRepository $loginRepository;
    public  function __construct(LoginRepository $loginRepositoryAuth)
    {
        $this->loginRepository = $loginRepositoryAuth;
    }

    public function execute(LoginRequest $request)
    {
        $login = $this->loginRepository->login($request);
        return  $login;
    }
}
