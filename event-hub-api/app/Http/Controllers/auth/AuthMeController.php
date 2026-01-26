<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;


class AuthMeController extends Controller
{
    public function me()
    {
        return  auth()->guard("")->user();
    }
}
