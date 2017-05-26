<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MediaType extends Model
{
    protected $table = 'media_type';
    protected $primaryKey = 'met_id';
    public $timestamps = false;
}
