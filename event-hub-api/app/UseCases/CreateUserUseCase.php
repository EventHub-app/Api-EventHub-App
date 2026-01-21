<?php
namespace App\UseCases;

use App\Entities\User;
use App\Repositories\UserCreateRepository;


class CreateUserUseCase
{
    public UserCreateRepository $userRepo;
    public function __construct(UserCreateRepository $repository)
    {
        $this->userRepo = $repository;
    }

    public function  create(User $data)
    {
        $user = $this->userRepo->create($data);
        return $user;
    }
}
