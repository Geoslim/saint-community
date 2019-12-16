<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeBodyCoverImage extends Model
{
    protected $table = 'home_body_cover_images';

    public $primarykey = 'id';

    public $timestamps = true;
}
