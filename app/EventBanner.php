<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventBanner extends Model
{
    protected $table = 'event_banners';

    public $primarykey = 'id';

    public $timestamps = true;
}
