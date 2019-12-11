<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnershipBody extends Model
{
    protected $table = 'partnership_bodies';

    public $primarykey = 'id';

    public $timestamps = true;
}
