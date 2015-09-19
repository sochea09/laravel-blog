<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PageCategory extends Model
{
    protected $table = 'POST_CATEGORY';
    protected $primaryKey = ['pos_id', 'cat_id'];
    public $timestamps = false;
}
