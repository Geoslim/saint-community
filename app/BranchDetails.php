<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchDetails extends Model
{
    protected $table = 'branch_details';

    public $primarykey = 'id';

    public $timestamps = true;
}
