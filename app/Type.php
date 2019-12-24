<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name', 'consumer_number'];


     public function activity(){

         return $this->hasMany(Activity::class);
     }
}
