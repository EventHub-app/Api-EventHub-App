<?php

namespace App\UseCases;

use App\Repositories\ListServicesRepository;

class ListServicesUseCase
{

    public ListServicesRepository $listServices;

    public function __construct(ListServicesRepository $repo)
    {
        $this->listServices = $repo;
    }



    public function execute()
    {
        $services = $this->listServices->list();
        return $services;
    }
}
