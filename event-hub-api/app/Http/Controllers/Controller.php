<?php

namespace App\Http\Controllers;

use App\Models\User;

abstract class Controller
{
    public function  getUser()
    {
        try {
            $user = User::where("email", "=",  "email@gcemail.com")->first();
        } catch (\Throwable $th) {
            return response()->json([
                "message" => "error"
            ]);
        }
    }
}
