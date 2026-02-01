<?php

namespace App\Repositories;


use App\Repositories\CreateServiceRepository;
use App\Http\Requests\service\CreateServiceRequest;
use App\Models\Service;

class CreateServiceRepositoryImp implements CreateServiceRepository
{

    public function store(CreateServiceRequest $request)
    {
        $file = $request->file("image_path");
        $imagePath = $file->store("uplouds", "public");
        $service = Service::create([
            "start_from" => $request->input("start_from"),
            "events_completed" => $request->input("events_completed"),
            "expirience_years" => $request->input("expirience_years"),
            "biography" => $request->input("biography"),
            "user_id" => $request->input("user_id"),
            "image_path" => $imagePath
        ]);
        return $service;
    }
}
