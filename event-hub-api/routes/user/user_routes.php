<?php

use App\Http\Controllers\user\CreateUserController;
use Illuminate\Support\Facades\Route;

Route::post("user/auth/store",[CreateUserController::class, "store"]);

