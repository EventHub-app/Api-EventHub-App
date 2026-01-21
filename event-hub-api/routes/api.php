<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get("/", function () {
    return response()->json([
        "message" => "welcome to event-hub-api " . Carbon::now()
    ]);
});


require_once __DIR__ ."/user/user_routes.php";