<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeTelecast extends Model
{
    protected $table = 'home_telecast';

    public $primarykey = 'id';

    public $timestamps = true;
}
