<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'page';
    protected $primaryKey = 'pag_id';
    public $timestamps = true;

    public function categories()
    {
        return $this->belongsToMany('App\Model\Category', 'page_category', 'pag_id', 'cat_id');
    }
}
