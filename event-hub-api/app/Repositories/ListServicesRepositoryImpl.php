<?php

namespace App\Repositories;

use App\Models\Service;

class ListServicesRepositoryImpl implements ListServicesRepository
{

    public function list()
    {
        $services = Service::all();
        return $services;
    }
}
