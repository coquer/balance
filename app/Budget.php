<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = ['budget', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
