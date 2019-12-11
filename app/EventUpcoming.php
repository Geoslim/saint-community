<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventUpcoming extends Model
{
    protected $table = 'event_upcomings';

    public $primarykey = 'id';

    public $timestamps = true;
}
