<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\loginRequest;
use App\Http\Resources\UserResource;
use Exception;
use App\UseCases\LoginUseCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
     private LoginUseCase $loginUsecase;
     public  function __construct(LoginUseCase $login)
     {
          $this->loginUsecase = $login;
     }
     public function login(LoginRequest $request)
     {
          try {
               $userAuthed = $this->loginUsecase->execute($request);
               $token = JWTAuth::fromUser($userAuthed);
               return response()->json([
                    "token" =>   $token,
                    "data" => new UserResource($userAuthed  )
               ]);
          } catch (Exception $e) {
               return   response()->json([
                    "error" => $e->getMessage()
               ]);
          }
     }
}
