<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaBanner extends Model
{
    protected $table = 'media_banners';

    public $primarykey = 'id';

    public $timestamps = true;
}
