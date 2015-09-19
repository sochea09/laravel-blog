<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PageCategory extends Model
{
    protected $table = 'PAGE_CATEGORY';
    protected $primaryKey = ['pag_id', 'cat_id'];
    public $timestamps = false;
}
