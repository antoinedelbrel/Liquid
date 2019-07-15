<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest_Event extends Model
{
    protected $fillable = [
        'guest_id', 'event_id'
    ];
}
