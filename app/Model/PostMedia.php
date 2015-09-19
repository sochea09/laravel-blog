<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostMedia extends Model
{
    protected $table = 'POST_MEDIA';
    protected $primaryKey = ['pos_id','med_id'];
    public $timestamps = false;
}
