<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $table = 'social_medias';

    public $primarykey = 'id';

    public $timestamps = true;
}
