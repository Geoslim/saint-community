<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventBody extends Model
{
    protected $table = 'event_bodies';

    public $primarykey = 'id';

    public $timestamps = true;
}
