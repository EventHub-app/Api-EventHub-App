<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        "messege" => "welcome to event-hub-api " . Carbon::now()->format("d-m-y"),
    ]);
});
