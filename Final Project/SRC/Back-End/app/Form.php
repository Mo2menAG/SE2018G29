<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $guarded = [];

    public function submissions(){
        return $this->hasMany('App\Submission');
    }

    public function user(){
        return $this->belongsTo('\App\User');
    }
}
