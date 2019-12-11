<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactScc extends Model
{
    protected $table = 'contact_sccs';

    public $primarykey = 'id';

    public $timestamps = true;
}
