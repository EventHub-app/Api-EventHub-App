<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Profission extends Model
{
    use HasUlids;

    protected  $fillable = [
        "name",
        "category_id"
    ];

     public function category(){
         return  $this->belongsTo(Category::class);
     }
}
