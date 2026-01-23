<?php

namespace App\Repositories;

use App\ErrorCustum\ErrorCustomMessage;
use App\Repositories\LoginRepository;
use App\Http\Requests\auth\loginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginRepositoryImp implements LoginRepository
{

  public function login(loginRequest $request)
  {
    $useCheckinExistences =  User::where("email", $request->email)->first();

    if ($useCheckinExistences && Hash::check($request->password, $useCheckinExistences->password,)) {

      return $useCheckinExistences;
    }
    throw new ErrorCustomMessage("User Doesn´t Exists", 404);
  }
}
