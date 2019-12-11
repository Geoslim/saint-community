<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LatestRelease extends Model
{
    protected $table = 'latest_releases';

    public $primarykey = 'id';

    public $timestamps = true;
}
