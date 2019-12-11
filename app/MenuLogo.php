<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuLogo extends Model
{
    protected $table = 'menu_logos';

    public $primarykey = 'id';

    public $timestamps = true;
}
