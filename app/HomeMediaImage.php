<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeMediaImage extends Model
{
    protected $table = 'home_media_images';

    public $primarykey = 'id';

    public $timestamps = true;
}
