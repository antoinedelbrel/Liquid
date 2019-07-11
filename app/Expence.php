<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expence extends Model
{
    protected $fillable = [
        'name', 'price', 'guest_id'
    ];
    public function guests(){
        return $this->belongsTo('App\Guest');
    }
}
