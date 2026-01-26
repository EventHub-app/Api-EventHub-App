<?php

namespace  App\Repositories;


use App\Repositories\CreateServiceRepository;
use App\Http\Requests\service\CreateServiceRequest;
use App\Models\Service;

class  CreateServiceRepositoryImp implements CreateServiceRepository
{

    public  function store(CreateServiceRequest $request)
    {
        $service = Service::create($request->all());
        return $service;
    }
}
