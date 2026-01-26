<?php

use App\Http\Controllers\Service\CreateServiceController;
use App\Http\Controllers\service\ListServicesController;
use Illuminate\Support\Facades\Route;

Route::prefix("user/service")->group(function(){
     Route::post("/store",  [CreateServiceController::class,"store"]);
     Route::get("/list",  [ListServicesController::class,"list"]);
});