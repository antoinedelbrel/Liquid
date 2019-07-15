<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name', 'email'
    ];
    public function expences(){
        return $this->hasMany('App\Expence');
    }
    public function events(){
        return $this->belongsToMany('App\Event');
    }
}
