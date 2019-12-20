<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeMediaHeading extends Model
{
    protected $table = 'home_media_headings';

    public $primarykey = 'id';

    public $timestamps = true;
}
