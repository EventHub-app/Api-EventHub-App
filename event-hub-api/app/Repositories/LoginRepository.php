<?php
namespace App\Repositories;
use App\Http\Requests\auth\loginRequest;

 interface LoginRepository {
     public function  login(LoginRequest $request);
 }