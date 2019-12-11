<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventUpcomingHeading extends Model
{
    protected $table = 'event_upcoming_headings';

    public $primarykey = 'id';

    public $timestamps = true;
}
