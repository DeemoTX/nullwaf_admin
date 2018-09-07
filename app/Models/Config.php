<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = [
        'switch','user_key',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User','key','user_key');
    }
}
