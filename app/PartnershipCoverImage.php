<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnershipCoverImage extends Model
{
    protected $table = 'partnership_cover_images';

    public $primarykey = 'id';

    public $timestamps = true;
}
