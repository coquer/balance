<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Type extends Model
{
    protected $fillable = ['name', 'consumer_number'];


     public function activity(){

         return $this->hasMany(Activity::class)->where('user_id', Auth::user()->id);
     }
}
