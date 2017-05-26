<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $hidden = ['usr_password'];
    protected $primaryKey = 'usr_id';
    public $timestamps = true;
}
