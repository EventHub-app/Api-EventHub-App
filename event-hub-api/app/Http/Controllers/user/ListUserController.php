<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

use App\UseCases\ListUsersUsecasese;
use Exception;


class ListUserController extends Controller
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
            return     response()->json([
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
