<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostMedia extends Model
{
    protected $table = 'post_media';
    protected $primaryKey = ['pos_id','med_id'];
    public $timestamps = false;
}
