<?php

namespace App\Http\Controllers\service;

use App\Http\Controllers\Controller;
use App\Http\Requests\service\CreateServiceRequest;
use App\Http\Resources\service\ServiceResource;
use App\UseCases\CreateServiceUseCase;
use Illuminate\Http\Request;

class CreateServiceController extends Controller
{
    private CreateServiceUseCase $createServiceUseCase;

    public function __construct(CreateServiceUseCase $createUsecase)
    {
        $this->createServiceUseCase  = $createUsecase;
    }

    public function  store(CreateServiceRequest $request)
    {
        try {
            $service =  $this->createServiceUseCase->execute($request);
            return response()->json([
                "status" => "success",
                "data" => new ServiceResource($service),

            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                "error" => $e->getMessage()
            ]);
        }
    }
}
