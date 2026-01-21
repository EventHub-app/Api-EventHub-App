<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
     use  HasUlids, SoftDeletes;
      protected $fillable = [
          "name"
      ];
       public function  profission(){
         return $this->hasMany(Profission::class);
       }
     
}
