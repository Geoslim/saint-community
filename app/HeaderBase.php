<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderBase extends Model
{
    protected $table = 'header_bases';

    public $primarykey = 'id';

    public $timestamps = true;
}
