<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PageCategory extends Model
{
    protected $table = 'page_category';
    protected $primaryKey = ['pag_id', 'cat_id'];
    public $timestamps = false;
}
