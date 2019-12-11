<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaCover extends Model
{
    protected $table = 'media_covers';

    public $primarykey = 'id';

    public $timestamps = true;
}
