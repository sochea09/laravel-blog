<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'PAGE';
    protected $primaryKey = 'pag_id';
    public $timestamps = true;
}
