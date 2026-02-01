<?php

namespace App\Http\Controllers\user;

use App\Entities\User as EntitiesUser;
use App\Http\Resources\user\UserResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\user\userCreateUserRequest;
use App\UseCases\CreateUserUseCase;




class CreateUserController extends Controller
{
    private CreateUserUseCase $createUserUseCase;
    public  function __construct(CreateUserUseCase $create)
    {
        $this->createUserUseCase = $create;
    }

    public function store(userCreateUserRequest $request)
    {
        try {
            $data =  $request->all();
            $userData = new EntitiesUser($data["email"], $data["name"], $data["password"]);
            $user = $this->createUserUseCase->create($userData);
            $user->assignRole("admin");
            return response()->json([
                 "message"=>"user created sucessfully",
                 "data"=> new UserResource($user),
            ]);

        } catch (\Throwable $th) {
            return response()->json(
                [
                    "message" => $th->getMessage()
                ],
                500
            );
        }
    }
}
