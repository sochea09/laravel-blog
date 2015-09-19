<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'CATEGORY';
    protected $primaryKey = 'cat_id';
    public $timestamps = true;
}
