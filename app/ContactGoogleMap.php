<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactGoogleMap extends Model
{
    protected $table = 'contact_google_maps';

    public $primarykey = 'id';

    public $timestamps = true;
}
