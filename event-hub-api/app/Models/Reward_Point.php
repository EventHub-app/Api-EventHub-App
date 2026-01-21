<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reward_Point extends Model
{
    use HasUlids, SoftDeletes;
    protected  $fillable = [
        "ponts",
        "description",
        "user_id",
    ];

    public function user()
    {
        return  $this->belongsTo(User::class);
    }
}
