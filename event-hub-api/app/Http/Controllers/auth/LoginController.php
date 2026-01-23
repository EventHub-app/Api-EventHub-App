<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\auth\loginRequest;
use Exception;
use App\UseCases\LoginUseCase;

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
               return response()->json([
                    "data" => $userAuthed
               ]);
          } catch (Exception $e) {
               return   response()->json([
                    "error" => $e->getMessage()
               ]);
          }
     }
}
