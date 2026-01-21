<?php
namespace App\Repositories;

use App\Entities\User;
use UserEntity;

interface UserCreateRepository
{
    public function create(User $user);
}
