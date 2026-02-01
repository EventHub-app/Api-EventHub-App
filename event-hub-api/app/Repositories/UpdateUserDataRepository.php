<?php
namespace App\Repositories;
use App\Http\Requests\user\UpdateUserRequest;

interface UpdateUserDataRepository {
     public function update(UpdateUserRequest $data);
}