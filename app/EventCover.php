<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCover extends Model
{
    protected $table = 'event_covers';

    public $primarykey = 'id';

    public $timestamps = true;
}
