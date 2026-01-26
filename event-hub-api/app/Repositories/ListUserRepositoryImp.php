<?php
namespace App\Repositories;
use App\ErrorCustum\ErrorCustomMessage;
use App\Models\User;
use App\Repositories\ListUserRepository;

class ListUserRepositoryImp  implements ListUserRepository
{


    public   function listUsers()
    {
        $user = User::all();
        if ($user->isEmpty()) {
          throw new ErrorCustomMessage("No Data", 404);
        }
       return $user;
    }
}
