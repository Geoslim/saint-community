<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventBg extends Model
{
    protected $table = 'event_bgs';

    public $primarykey = 'id';

    public $timestamps = true;
}
