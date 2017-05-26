<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PageCategory extends Model
{
    protected $table = 'post_category';
    protected $primaryKey = ['pos_id', 'cat_id'];
    public $timestamps = false;
}
