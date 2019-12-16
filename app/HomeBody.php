<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeBody extends Model
{
    protected $table = 'home_bodies';

    public $primarykey = 'id';

    public $timestamps = true;
}
