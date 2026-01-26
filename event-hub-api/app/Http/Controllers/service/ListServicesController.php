<?php

namespace App\Http\Controllers\service;

use App\Http\Controllers\Controller;
use App\Http\Resources\service\ServiceResource;
use App\UseCases\ListServicesUseCase;
use Illuminate\Http\Request;


class ListServicesController extends Controller
{
    private ListServicesUseCase $ListSeviceUsecase;

    public  function __construct(ListServicesUseCase $serviceUsecase)
    {
        $this->ListSeviceUsecase = $serviceUsecase;
    }

    public function list()
    {
        try {

            $services = $this->ListSeviceUsecase->execute();
            return response()->json([
                "message" => "Services Taken Sucessfully!",
                "data" => ServiceResource::collection($services),
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "message" => $th->getMessage(),
            ]);
        }
    }
}
