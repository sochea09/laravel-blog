<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PageMedia extends Model
{
    protected $table = 'page_media';
    protected $primaryKey = ['pag_id', 'med_id'];
    public $timestamps = false;
}
