<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerTest;
use App\Http\Controllers\user\ListUserController;
use App\Http\Controllers\user\CreateUserController;
use Illuminate\Support\Facades\Route;

Route::post("user/auth/store",[CreateUserController::class, "store"]);
Route::get("admin/list/users", [ListUserController::class,"list"])->middleware("auth:pi");

