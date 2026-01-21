<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        "start_from",
        "events_completed",
        "expirience_years",
        "biography",
        "user_id",
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
