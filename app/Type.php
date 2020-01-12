<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Type extends Model
{
    protected $fillable = ['name', 'consumer_number', 'user_id'];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function activity($month = "01", $year = 2020){
         return $this->hasMany(Activity::class)->where('user_id', Auth::user()->id)->whereMonth('paid_at', $month)->whereYear('paid_at', $year);
     }

     public function task(){
         return $this->hasMany(Task::class)->where('done', false);
     }

     public function information(){
         return $this->belongsTo(Information::class);
     }
}
