<?php
namespace App\Repositories;
use App\Entities\User as EntitiesUser;
use App\Models\User;
use UserEntity;

 class CreateUserRepositoryImp implements UserCreateRepository{
    public function create(EntitiesUser $user){
         $user = User::create([$user]);
          return $user;
    }
 }