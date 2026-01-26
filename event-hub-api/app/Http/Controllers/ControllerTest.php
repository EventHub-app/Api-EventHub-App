<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\UseCases\ListUsersUsecasese;
use Exception;
use Illuminate\Http\Request;

class ControllerTest extends Controller
{
       private ListUsersUsecasese $listUsersUsecases;
    public function __construct(ListUsersUsecasese $listUsecasesUsers)
    {
        $this->listUsersUsecases = $listUsecasesUsers;
    }
    public  function list()
    {
        try {
            $users  = $this->listUsersUsecases->execute();
          return  response()->json([
                "messege" => "Users Taken Sucessfully!",
                "data" => $users
            ]);
      
        } catch (Exception $e) {
            return response()->json([
                "errorMessege" => $e->getMessage(),
            ]);
        }
    }
}
