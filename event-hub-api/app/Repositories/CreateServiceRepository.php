<?php

namespace App\Repositories;

use App\Http\Requests\service\CreateServiceRequest;

interface CreateServiceRepository
{
    public function store(CreateServiceRequest $request);
}
