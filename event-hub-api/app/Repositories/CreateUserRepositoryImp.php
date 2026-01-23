<?php

namespace App\Repositories;

use App\Entities\User as EntitiesUser;
use App\ErrorCustum\ErrorCustomMessage;
use App\Models\User;
use App\Repositories\UserCreateRepository;
use Exception;
use Illuminate\Support\Facades\Hash;

class CreateUserRepositoryImp implements UserCreateRepository
{
   public function create(EntitiesUser $user)
   {
      $userCheckingExisting = User::where("email", $user->email)->first();
      if (!$userCheckingExisting) {
         $userData = User::create([
            "name" => $user->name,
            "password" => Hash::make($user->password),
            "email" => $user->email,
            "address" => $user->address ?? "address",
         ]);
         return  $userData;
      }
      throw new  ErrorCustomMessage("User Already Exists", 409);
   }
}
