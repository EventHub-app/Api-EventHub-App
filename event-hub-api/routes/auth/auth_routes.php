
<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix("user/auth")->group(function(){
   Route::post("/login", [LoginController::class, "login"]);
});