<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnershipBanner extends Model
{
    protected $table = 'partnership_banners';

    public $primarykey = 'id';

    public $timestamps = true;
}
