<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'slug', 'date'
    ];
    public function guests(){
        return $this->belongsToMany('App\Guest');
    }
}
