<?php

namespace App\UseCases;

use App\Repositories\CreateServiceRepository;
use App\Http\Requests\service\CreateServiceRequest;

class  CreateServiceUseCase
{

    public  CreateServiceRepository $repository;

    public function __construct(CreateServiceRepository $repo)
    {
        $this->repository = $repo;
    }

    public function execute(CreateServiceRequest $request)
    {
        $service = $this->repository->store($request);
        return  $service;
    }
}
