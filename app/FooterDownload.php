<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterDownload extends Model
{
    protected $table = 'footer_downloads';

    public $primarykey = 'id';

    public $timestamps = true;
}
