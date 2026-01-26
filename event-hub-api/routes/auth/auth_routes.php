
<?php

use App\Http\Controllers\auth\AuthMeController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix("user/auth")->group(function () {
   Route::post("/login", [LoginController::class, "login"]);
   Route::get("/me", [AuthMeController::class, "me"]);
});
