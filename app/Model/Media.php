<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'MEDIA';
    protected $primaryKey = 'med_id';
    public $timestamps = true;
}
