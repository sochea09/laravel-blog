<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'POST';
    protected $primaryKey = 'pos_id';
    public $timestamps = true;
}
