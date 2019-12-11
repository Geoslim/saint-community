<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactBanner extends Model
{
    protected $table = 'contact_banners';

    public $primarykey = 'id';

    public $timestamps = true;
}
