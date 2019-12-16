<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderImage extends Model
{
    protected $table = 'slider_images';

    public $primarykey = 'id';

    public $timestamps = true;
}
