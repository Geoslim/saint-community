<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LatestReleaseCover extends Model
{
    protected $table = 'latest_release_covers';

    public $primarykey = 'id';

    public $timestamps = true;
}
