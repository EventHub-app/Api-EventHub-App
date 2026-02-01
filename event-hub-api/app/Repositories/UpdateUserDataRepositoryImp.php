<?php

namespace App\Repositories;

use App\Http\Requests\user\UpdateUserRequest;
use App\Models\User;
use App\Repositories\UpdateUserDataRepository;

class UpdateUserDataRepositoryImp implements UpdateUserDataRepository{
    
    public function update(UpdateUserRequest $data){
         $file = $data->file("image_path");
         $imagePath = $file->store("uplouds", "public");

        $dataResult =  User::create([
            "name"=> $data->input("image_path"),
            "email"=> $data->input("email"),
            "image_path"=> $data->file("image_path"),
        ]);

        return $dataResult;
    }
}