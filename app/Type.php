<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Type extends Model
{
    protected $fillable = ['name', 'consumer_number'];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function activity(){
         return $this->hasMany(Activity::class)->where('user_id', Auth::user()->id);
     }

     public function task(){
         return $this->hasMany(Task::class)->where('done', false);
     }

     public function information(){
         return $this->belongsTo(Information::class);
     }
}
