<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasUuids;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        "start_from",
        "events_completed",
        "expirience_years",
        "biography",
        "user_id",
        "image_path",
    ];
    public  function user()
    {
        return $this->belongsTo(User::class);
    }

    public  function  portifolio()
    {
        return $this->hasMany(Portifolio::class);
    }
}
