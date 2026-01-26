<?php

namespace App\Http\Resources\service;

use App\Http\Resources\user\UserResource as UserUserResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "start_from" => $this->start_from,
            "events_completed" =>  $this->events_completed,
            "expirience_years" =>  $this->expirience_years,
            "biography" =>  $this->biography,
            "image_path" =>  $this->image_path,
            "id" =>  $this->id,
            "user" => new  UserUserResource(User::find($this->user->id)),
            "updated_at" =>  $this->updated_at,
            "created_at" =>  $this->created_at,
        ];
    }
}
