<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'cat_id';
    public $timestamps = true;

    public function pages()
    {
        return $this->belongsToMany('Page', 'page_category', 'cat_id', 'pag_id');
    }
}
